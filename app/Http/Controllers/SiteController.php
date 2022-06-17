<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use Symfony\Contracts\Service\Attribute\Required;

class SiteController extends Controller
{
    public function index () {
        $sites = Site::orderBy('created_at', 'desc')->paginate(10);

        // COMPACT convierte el array con variables del mismo nombre en una funcion con un solo parametro
        //  return view('sites.index',compact('sites'));   -> equivale a ->  return view('sites.index',['sites' => $sites]);
        return view('sites.index',['sites' => $sites]);
    }

    public function create () {
        return view('sites.create');    }

    public function store (Request $request) {
        $site = New Site();
        $site->localid  = $request->localid;
        $site->nombre   = $request->nombre;
        $site->zonal    = $request->zonal;
        $site->estado   = $request->estado;
        $site->save();
        return redirect()->route('sites.show', $site);
    }

    public function show (Site $site) {
        return view('sites.show', ['site' => $site]);
    }

    public function edit(Site $site) {
        return view('sites.edit', ['site' => $site]);
    }

    public function update(Request $request, Site $site) {
        $site->localid  = $request->localid;
        $site->nombre   = $request->nombre;
        $site->zonal    = $request->zonal;
        $site->estado   = $request->estado;
        $site->save();
        return redirect()->route('sites.show', $site);
    }

}
