<?php

namespace App;

use App\Notifications\ConfirmEmailNotification;
use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;

class User extends \TCG\Voyager\Models\User

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'pontos', 'provider', 'provider_id', 'email_verify', 'remember_token', 'role_id', 'id_curso', 'id_ano',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'boolean',
    ];

    public function curso()
    {
        return $this->belongsTo('App\Curso', 'id_curso');
    }

    public function ano()
    {
        return $this->belongsTo('App\Ano', 'id_ano');
    }

    // EMAIL VERIFICATION

    public function isConfirmed(): bool
    {
        return !is_null($this->email_verified_at);
    }

    public function scopeconfirm()
    {
        $this->email_verified_at = now();
        $this->save();
    }

    public function scopesendConfirmationEmail()
    {
        $this->notify(new ConfirmEmailNotification($this));
    }
    //

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    public function workshopsInscritos()
    {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(Workshop::class, 'workshop-inscricoes');
    }

    public function workshopsPresentes()
    {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(Workshop::class, 'workshop-presencas');
    }

}
