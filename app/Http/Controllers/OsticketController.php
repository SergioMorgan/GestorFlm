<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Osticket;

class OsticketController extends Controller
{
    public function index () {
        $ostickets = Osticket::paginate(10);
        return view('ostickets.index',['ostickets' => $ostickets]);
    }

    public function create () {
        return view('ostickets.create');    }

    public function show ($id) {
        $osticket = Osticket::find($id);
        return view('ostickets.show', ['osticket' => $osticket]);    }

}