<?php

namespace App\Http\Controllers;
use App\livres;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\auth;
use Illuminate\Http\Request;

class abonecontroler extends Controller
{
    function creat()
    {
        return view('abonner.aderan');
    }
    function aderant(Request $request)
    {
        $user = new abones();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->numero=$request->numero;
        $user->cnib=$request->cnib;
        $user->profil=$request->profil;
        $user->password = Hash::make($request->password);
        // $user->livre_id = $request->livre_id;
        $user->save();
        // Session::flash('message', 'Enregistré avec succès');
        // Session::flash('alert-class', 'alert-success text-center');
        return redirect()->back();
    }
    function conexion(Request $request)
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
