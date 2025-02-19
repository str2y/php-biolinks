<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request)
    {
        if($request->attemptLogin()){
            return to_route('dashboard');
        }


        return back()->with(['message' => 'Não deu certo']);
    }
}
