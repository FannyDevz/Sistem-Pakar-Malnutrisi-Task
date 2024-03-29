<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)

    {

        $input = $request->all();


        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);



        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
            {
                $user = auth()->user();
                $id = $user->id;
                $user_username = $user->username;

                if ($user->level == 'admin') {
                    return redirect()->route('admin.home')->with('success','Berhasil Login');
                } else if ($user->level == 'user') {
                    return redirect()->route('user.home')->with('success','Berhasil Login');

                } else {
                    // Jika level tidak dikenali, maka redirect ke halaman login
                    auth()->logout();
                    return redirect()->route('login')->with('warning','Level tidak dikenali.');
                }
            } else {
                return redirect()->route('login')
                    ->with('warning','Email-Address And Password Are Wrong.');
            }
    }
}
