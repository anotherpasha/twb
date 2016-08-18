<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $data['user'] = Auth::user();
        return view('profile', $data);
    }
}
