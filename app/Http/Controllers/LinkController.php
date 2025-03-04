<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\User;

class LinkController extends Controller
{
    public function create()
    {
        return view('links.create');
    }

    public function store(StoreLinkRequest $request)
    {
        /** @var User */
        $user = auth()->user();

        $user->links()->create($request->validated());
        return to_route('dashboard')->with('message', 'Link criado com sucesso!');
    }

    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->fill($request->validated())->save();
        return to_route('dashboard')->with('message', 'Alterado com sucesso!');
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return to_route('dashboard')->with('message', 'Deletado com sucesso!');
    }

    public function up(Link $link)
    {
        $link->moveUp();
        return back();
    }

    public function down(Link $link)
    {
        $link->moveDown();
        return back();
    }
}
