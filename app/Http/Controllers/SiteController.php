<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{
    public function index () {

        $sites = Site::paginate(10);

        // COMPACT convierte el array con variables del mismo nombre en una funcion con un solo parametro
        //  return view('sites.index',compact('sites'));   -> equivale a ->  return view('sites.index',['sites' => $sites]);
        return view('sites.index',['sites' => $sites]);
    }

    public function create () {
        return view('sites.create');    }

    public function show ($id) {
        $site = Site::find($id);
        return view('sites.show', ['site' => $site]);
    }
}
