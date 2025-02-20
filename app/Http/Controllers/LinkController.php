<?php

namespace App\Http\Controllers;

use App\Models\Link;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;

class LinkController extends Controller
{
    public function create(){
        return view('links.create');
    }

    public function store(StoreLinkRequest $request)
    {
        Link::query()->create($request->validated());
        return to_route('dashboard');
    }

    public function edit(Link $link) {}

    public function update(UpdateLinkRequest $request, Link $link) {}

    public function destroy(Link $link) {}
}
