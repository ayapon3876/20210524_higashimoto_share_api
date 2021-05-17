<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function post(Request $request)
    {
        return response()->join(['auth' => false], 200);
    }
}
