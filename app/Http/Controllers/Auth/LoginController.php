<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = "/portal/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    protected function authenticated(Request $request, $user): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
//    {
//        if ($request->expectsJson()) {
//            return response()->json(['message' => 'Logged in successfully']);
//        }
//
//        return redirect()->intended($this->redirectPath());
//    }
//
//    public function login(Request $request)
//    {
//        $this->validateLogin($request);
//
//        if (method_exists($this, 'hasTooManyLoginAttempts') &&
//            $this->hasTooManyLoginAttempts($request)) {
//            $this->fireLockoutEvent($request);
//
//            return $this->sendLockoutResponse($request);
//        }
//
//        if ($this->attemptLogin($request)) {
//            $request->session()->regenerate();
//
//            $this->clearLoginAttempts($request);
//
//            if ($request->expectsJson()) {
//                $user = $this->guard()->user();
//                return response()->json(['message' => 'Logged in successfully', 'user' => $user]);
//            }
//
//            return $this->sendLoginResponse($request);
//        }
//
//        $this->incrementLoginAttempts($request);
//
//        return $this->sendFailedLoginResponse($request);
//    }
//
//    protected function sendFailedLoginResponse(Request $request)
//    {
//        if ($request->expectsJson()) {
//            throw ValidationException::withMessages([
//                $this->username() => [trans('auth.failed')],
//            ]);
//        }
//
//        return redirect()->back()
//            ->withInput($request->only($this->username(), 'remember'))
//            ->withErrors([
//                $this->username() => trans('auth.failed'),
//            ]);
//    }
}
