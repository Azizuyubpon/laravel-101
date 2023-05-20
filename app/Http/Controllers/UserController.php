<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function register(Request $request)
    {
        $incomingfields = $request->validate([
            'name' =>['required', 'min:3', 'max:10'],
            'email' =>['required', 'email'],
            'password' =>['required', 'min:5', 'max:200']
        ]);
        User::create($incomingfields);

        return 'Hello from  our controller';

    }


}
