<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class regController extends Controller
{
    
    public function store(Request $request)
    {
      $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return response()->json($user);
    }

    