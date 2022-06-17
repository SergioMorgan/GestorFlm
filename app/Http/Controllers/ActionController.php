<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;

class ActionController extends Controller
{
    public function index () {
        $actions = Action::paginate(10);
        return view('actions.index',['actions' => $actions]);
    }

    public function create () {
        return view('actions.create');    }

    public function show ($id) {
        $action = Action::find($id);
        return view('actions.show', ['action' => $action]);    }
}
