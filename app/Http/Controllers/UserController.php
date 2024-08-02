<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('frontend.login-register');
    }


    public function login(LoginRequest $request)
    {

        $email_or_username=$request->input('email_or_username');
        $password=$request->input('password');
        $field = filter_var($email_or_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        $isSuccess = Auth::attempt([$field=>$email_or_username,'password'=>$password], $request->remeber_me);
        if (!$isSuccess) {
            return redirect()->route("login.index")->with("error", "نام کاربری یا پسورد اشتباه است !");
        }
        $request->session()->regenerate();
        return redirect()->intended(route('app'));


    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended(route('login'));
    }



    public function sign_up(CreateUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('app');
    }


    public function edit(User $user)
    {
        $user->load('skills');
        return view('my-details',compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated);
        return back();
    }


}
