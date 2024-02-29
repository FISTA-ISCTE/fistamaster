<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use HasRoles;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'linkedin',
        'cv_verify',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            // Gera um UUID
            $model->uuid = (string) Uuid::generate(4);

            // Gera um token pessoal com 6 dígitos em letras maiúsculas
            $model->token_pessoal = Str::upper(Str::random(6));
        });
    }
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa', 'id_empresa');
    }
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso', 'id_curso');
    }
    public function ano()
    {
        return $this->belongsTo('App\Models\Ano', 'id_ano');
    }
    public static function verificarTokenTemporario($token)
    {
        // Assume que você tem uma relação definida no modelo User para tokens temporários
        $tokenTemporario = TokenTemporario::where('token', $token)
                                          ->where('expires_at', '>', now())
                                          ->first();

        if ($tokenTemporario && $tokenTemporario->user_id == auth()->id()) {
            // Token é válido e pertence ao usuário autenticado
            return true;
        }

        // Token inválido ou expirado
        return false;
    }
    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    public function gerarTokenTemporario()
    {
        $token = Str::random(40); // Gera uma string aleatória de 40 caracteres

        // Aqui você deve salvar o token em algum lugar associado ao usuário
        // Por exemplo, em uma tabela de tokens temporários no banco de dados
        $tokenTemporario = new TokenTemporario; // Supõe que você tenha uma classe/modelo TokenTemporario
        $tokenTemporario->user_id = $this->id;
        $tokenTemporario->token = $token;
        $tokenTemporario->expires_at = now()->addMinutes(10); // Define um tempo de expiração para o token
        $tokenTemporario->save();

        return $token;
    }
    protected $appends = [
        'profile_photo_url',
    ];
}
