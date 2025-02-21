<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User */
        $user = auth()->user();

        $user->fill($request->validated())->save();

        return back()->with('message', 'Profile atualizado com sucesso');
    }
}