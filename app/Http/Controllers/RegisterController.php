<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm()
    {
        $users = User::get();
        $greetings = 'Welcome';

        return view('users.create', ['registrants' => $users, 'greetings' => $greetings]);
    }

    public function registerSubmit(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');

        $data = [
            'name' => $name,
            'password' => $password,
            'email' => $email
        ];

        User::create($data);

        return back();
    }

    public function show($id)
    {
        $user = User::find($id);

        return $user->name;
    }
}
