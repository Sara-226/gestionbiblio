<?php

namespace App\Http\Controllers;

use App\pays;
use App\User;
use App\livres;
use App\auteurs;
use App\types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Session;

class livrecontroler extends Controller
{
    public function stock()
    {
        $auteurs= auteurs::all();
        $pays= pays::all();
        $types= types::all();
        return view('stock', compact('auteurs', 'pays', 'types'));
    }
    public function auteur_livre($auteur)
    {
        $livres= livres::where('auteur_id', '=', $auteur)->get();
        return view('auteur_livre', compact('livres'));
    }
    public function pays_livre($pays)
    {
        $livres= livres::where('pay_id', '=', $pays)->get();
        return view('pays_livre', compact('livres'));
    }
     public function type_livre($type)
    {
        $livres= livres::where('type_id', '=', $type)->get();
         return view('type_livre', compact('livres'));
    }
    public function livre_form()
    {
        $auteur = auteurs::all();
        $type = types::all();
        $pays = pays::all();
        return view('ajoute', ['auteur' => $auteur, 'type' => $type, 'pays' => $pays]);
    }
    function livr(Request $request)
    {
        $user = new livres();

        $user->titre = $request->titre;
        $user->anneparution = $request->anneparution;
        $user->auteur_id = $request->auteur_id;
        $user->pay_id = $request->pay_id;
        $user->type_id = $request->type_id;
        $user->save();
        Session::flash('message', 'Enregistré avec succès');
        Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();
    }
    function register(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('index');
    }
    function connexion(Request $request)
    {
        $test = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($test) {
            return redirect('document ');
        } else {
            //return redirect('');
        }
    }
}
