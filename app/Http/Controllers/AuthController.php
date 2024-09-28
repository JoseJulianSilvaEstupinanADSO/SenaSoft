<?php

namespace App\Http\Controllers;

use App\Models\Regionale;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        $regionales = Regionale::all();
        return view('login', compact('regionales'));
    }
}
