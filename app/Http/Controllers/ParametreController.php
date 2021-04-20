<?php


namespace App\Http\Controllers;

use App\auteurs;
use App\pays;
use App\types;

use Illuminate\Http\Request;

class ParametreController extends Controller
{
    function create()
    {

        return view('parametre');
    }
    function auteur(Request $request)
    {
        $user = new auteurs();

        $user->auteurs = $request->auteur;
        $user->save();
        return redirect()->back();
    }
    function categorie(Request $request)
    {
        $user = new types();

        $user->types = $request->type;
        $user->save();
        return redirect()->back();
    }
    function pays(Request $request)
    {

        $user = new pays();

        $user->pays = $request->pays;
        $user->save();
        return redirect()->back();
    }
}
