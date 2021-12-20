<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Client;
use Auth;
use PDF;


class DeviController extends Controller
{
    public function index(){
$listdevi = Devi::all();
return  view('devis.index',['devis' => $listdevi]);
    }


    public function show($num_devis)
    {
        $devis = Devi::find($num_devis);


        return view('devis.view',['devis' => $devis]);
    }

    public function createPDF() {
        // retreive all records from db
        $data = Devi::all();

        // share data to view
        view()->share('devis',$data);
        $pdf = PDF::loadView('view',$data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }


    public function generatePDF()
    {
        $data = [
            'heading' => 'Welcome to Funda of Web IT',
            'description' => 'This description of Funda of Web IT'
        ];
        $pdf = PDF::loadView('yourPDF', $data);

        return $pdf->download('fundaofwebit.pdf');
    }

    //========================================================//
    public function create(){
return view('devis.create');
    }

    //=======================================================//
    public function store(Request $request){


        $cli = new Client();

        $cli->cin= $request->input('cin');
        $cli->nom = $request->input('nom');
        $cli->prenom = $request->input('prenom');
        $cli->adresse =$request->input('adresse');
        $cli->gsm =$request->input('gsm');
        $cli->email =$request->input('email');

        $cli->save();

        $vehi = new Vehicule();
        $vehi->immatriculation =$request->input('immatriculation');
        $vehi->date_circulation =$request->input('date_circulation');
        $vehi->marque =$request->input('marque');
        $vehi->val_neuf =$request->input('val_neuf');
        $vehi->val_venal =$request->input('val_venal');
        $vehi->carburant =$request->input('carburant');
        $vehi->puissance =$request->input('puissance');
        $vehi->cin_client = $cli->cin;

     $vehi->save();

        $dev = new Devi();
        $dev->date_effet= $request->input('date_effet');
        $dev->date_echeance = $request->input('date_echeance');
        $dev->nom_pack = $request->input('nom_pack');
        $dev->immatricule = $vehi->immatriculation;

        $dev->save();


        session()->flash('success','Le devis à été bien enregistré !');
return view('devis.index');

    }
    //======================================================//
    public function edit($num_devis){
        $dev = Devi::find($num_devis);


return view('devis.edit',['devis' => $dev]);
    }
    //=====================================================//
    public function update(Request $request,$num_devis){

        $dev = Devi::find($num_devis);

        $dev->date_effet= $request->input('date_effet');
        $dev->date_echeance = $request->input('date_echeance');
        $dev->nom_pack = $request->input('nom_pack');

        $dev->save();
        $clie = Client::find($num_devis);
        $clie->cin= $request->input('cin');

        $clie->save();
        return redirect('devis');
    }
    //==================================================//
    public function destroy(Request $request,$num_devis){
          $dev = Devi::find($num_devis);

          $dev->delete();
          return redirect('devis');
    }

}

