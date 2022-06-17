<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsticketController extends Controller
{
    public function index () {
        return view('ostickets.index');
    }

    public function create () {
        return view('ostickets.create');    }

    public function show ($osticket) {
        return view('ostickets.show', ['osticket' => $osticket]);    }

    
}
