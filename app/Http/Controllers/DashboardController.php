<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Regionale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $regionales = Regionale::all();
        return view('dashboard', compact('regionales'));
    }
}