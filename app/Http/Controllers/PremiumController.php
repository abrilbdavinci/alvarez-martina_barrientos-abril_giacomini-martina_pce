<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PremiumController extends Controller
{
    public function premium()
    {
        return view('premium');
    }
}
