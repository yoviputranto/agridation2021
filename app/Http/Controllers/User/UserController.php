<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Lomba;
use App\Dlomba;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.home', [
            'lombas' => Lomba::all()->count(),
            'dlombas' => Dlomba::with(['getLomba', 'getUser'])->get()
        ]);
    }
}
