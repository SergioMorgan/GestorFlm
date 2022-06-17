<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;

class ActionController extends Controller
{
    public function index () {
        $actions = Action::orderBy('created_at', 'desc')->paginate(10);
        return view('actions.index',['actions' => $actions]);
    }

    public function create () {
        return view('actions.create');
    }

    public function store (Request $request) {
        $action = New Action();
        $action->siomid     = $request->siomid;
        $action->username   = $request->username;
        $action->detalle    = $request->detalle;
        $action->save();
        return redirect()->route('actions.show', $action);
    }

    public function show (Action $action) {
        return view('actions.show', ['action' => $action]);
    }

    public function edit(Action $action) {
        return view('actions.edit', ['action' => $action]);
    }

    public function update(Request $request, Action $action) {
        $action->siomid     = $request->siomid;
        $action->username   = $request->username;
        $action->detalle    = $request->detalle;
        $action->save();
        return redirect()->route('actions.show', $action);
    }

}
