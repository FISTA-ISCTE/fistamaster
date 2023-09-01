<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $data): User
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

    public function register(Request $request)
    {
        $empresa = Empresa::where('id', $request->empresa)->first();
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect('/' . '#myModal')
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
        if (strcmp($request->first_name, "James") != 0 && strcmp($request->last_name, "Smith") != 0) {
            $user = $this->create($request->all());
//      event(new Registered($user));
            $user->sendConfirmationEmail();
            if ($user->remember_token != null) {
                $invite = new Invite;
                $invite->uuid_convidar = $user->remember_token;
                $invite->uuid_convidado = $user->uuid;
                $invite->save();
                $user->remember_token = null;
                $user->save();
            }
            if (!empty($request->empresa)) {
                $empresa->id_user = $user->id;
                $user->empresa = $request->empresa;
                $user->save();
                $empresa->save();
            }
            $this->guard()->login($user);
            if ($response = $this->registered($request, $user)) {
                return $response;
            }

            return $request->wantsJson()
            ? new Response('', 201)
            : redirect()->route('verify');
        }
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
