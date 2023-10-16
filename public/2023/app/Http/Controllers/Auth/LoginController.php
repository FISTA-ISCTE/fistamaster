<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use app\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            dd($user);
        } catch (Exception $e) {
            return redirect('/login');
        }
        $authUser = $this->checkUser($user, $provider);
        Auth::login($authUser, true);
        return redirect()->back();
    }
    public function checkUser($providerUser, $provider)
    {
        $account = User::where('provider_name', $provider)
            ->where('provider_id', $providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $user = User::where('email', $providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'first_name' => $providerUser->getName(),
                    'provider_id' => $providerUser->getId(),
                    'provider_name' => $provider,
                ]);
            }
            return $user;
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->back();;
        }
        return redirect('/' . '#myModal')
            ->withErrors(['email' => ["Os dados inseridos não coincidem com os nossos registos."]])
            ->withInput();
    }
}
