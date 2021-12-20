<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $listdevi = Devi::all();
        return  view('devis.index',['devis' => $listdevi]);
    }

    //========================================================//
    public function create(){
        return view('devis.create');
    }

    public function store(Request $request){

        $dev = new Devi();
        $dev->date_effet= $request->input('date_effet');
        $dev->date_echeance = $request->input('date_echeance');
        $dev->nom_pack = $request->input('nom_pack');

        $cli = new Client();
        $cli->CIN= $request->input('CIN');
        $cli->nom = $request->input('nom');
        $cli->prenom = $request->input('prenom');
        $cli->adresse =$request->input('adresse');
        $cli->gsm =$request->input('gsm');
        $cli->email =$request->input('email');

        $dev->$save();

        session()->flash('success','Le devis à été bien enregistré !');
        return redirect('devis');

    }
}
