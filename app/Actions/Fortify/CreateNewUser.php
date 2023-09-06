<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $data)
    {
        $empresa = Empresa::where('id', $data['empresa'])->first();
        $validator = $this->validator($data);
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // $client = new Client();

        // $response = $client->get('https://api.testmail.top/domain/check?data=' . $request->email, [
        //     'headers' => [
        //         'Authorization' => env('TESTMAIL_AUTH'),
        //     ],
        // ]);

        // $json = json_decode($response->getBody()->getContents());
        // if (!$json->result) {
        //     return redirect('/');
        // }
        if (strcmp($data['first_name'], "James") != 0 && strcmp($data['last_name'], "Smith") != 0) {
            $user = $this->register($data);
//      event(new Registered($user));
            //$user->sendConfirmationEmail();
            if ($user->remember_token != null) {
                $invite = new Invite;
                $invite->uuid_convidar = $user->remember_token;
                $invite->uuid_convidado = $user->uuid;
                $invite->save();
                $user->remember_token = null;
                $user->save();
            }
            if (!empty($data['empresa'])) {
                $empresa->id_user = $user->id;
                $user->empresa = $data['empresa'];
                $user->save();
                $empresa->save();
            }
            Auth::login($user);
            /*if ($response = $this->registered($data, $user)) {
                return $response;
            }*/

            return $data->wantsJson()
            ? new Response('', 201)
            : redirect()->route('verify');
        }
    }

    public function register(array $data): User
    {
        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->pontos = '0';
        //$user->email_verify = 0;
        //$user->remember_token = $data['invite'];
        $user->provider = 'web';
        $user->password = Hash::make($data['password']);
        if (array_key_exists('id_curso', $data)) {
            $user->id_curso = $data['id_curso'];
        }

        if (array_key_exists('id_ano', $data)) {
            $user->id_ano = $data['id_ano'];
        }

        $user->email_verified_at = null;
        $user->save();
        return $user;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);

        return $validator;
    }
}
