<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $listcli = Client::all();
        return  view('clients.indexClient',['clients' => $listcli]);
    }
    public function show()
    {

        return view('devis.view',['devis' => $devis ,'clients' => $clients]);
    }


}
