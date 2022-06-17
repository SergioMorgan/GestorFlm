<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Osticket;

class OsticketController extends Controller
{
    public function index () {
        $ostickets = Osticket::orderBy('created_at', 'desc')->paginate(10);
        return view('ostickets.index',['ostickets' => $ostickets]);
    }

    public function create () {
        return view('ostickets.create');    }

    public function store (Request $request) {
        $osticket = New Osticket();
        $osticket->siomid           = $request->siomid;
        $osticket->localid          = $request->localid;
        $osticket->estado           = $request->estado;
        $osticket->tipo             = $request->tipo;
        $osticket->fechaasignacion  = $request->fechaasignacion;
        $osticket->descripcion      = $request->descripcion;
        $osticket->save();
        return redirect()->route('ostickets.show', $osticket);
    }

    public function show (Osticket $osticket) {
        return view('ostickets.show', ['osticket' => $osticket]);
    }

    public function edit(Osticket $osticket) {
        return view('ostickets.edit', ['osticket' => $osticket]);
    }

    public function update(Request $request, Osticket $osticket) {
        $osticket->siomid           = $request->siomid;
        $osticket->localid          = $request->localid;
        $osticket->estado           = $request->estado;
        $osticket->tipo             = $request->tipo;
        $osticket->fechaasignacion  = $request->fechaasignacion;
        $osticket->descripcion      = $request->descripcion;
        $osticket->save();
        return redirect()->route('ostickets.show', $osticket);
    }

    }