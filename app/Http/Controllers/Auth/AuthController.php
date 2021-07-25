<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()

    /**
     * @return View
     */
    {
        return view('login.login_form');
    }
    /**
     * @param App\Http\Requests\LoginFormRequest $request
     */
    public function login(LoginFormRequest $request)
    {
        dd($request->all());
    }
}
