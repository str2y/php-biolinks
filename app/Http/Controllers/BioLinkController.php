<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BioLinkController extends Controller
{
    public function __invoke(User $user)
    {
        return view('bio-links', compact('user'));
    }
}