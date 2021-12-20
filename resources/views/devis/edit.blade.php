@extends('layouts.master')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="{{url('devis/'.$devis->num_devis )}}" method="post">
                    <input type="hidden" name="_method" value="PUT">

                    {{ @csrf_field() }}
                    <br>
                    <label for="" style="color: #0a53be">   <b>----------------Client-------------------</b></label>

                    <div class="form-checkbox-light">
                        <label for=""><b>CIN</b> </label>
                        <input type="text" name="cin" class="form-control"  >
                    </div>

                    <div class="form-checkbox-light">
                        <label for=""><b>Prénom</b> </label>
                        <input type="text" name="prenom" class="form-control" >
                    </div>
                    <div class="form-checkbox-light">
                        <label for=""><b>Nom</b> </label>
                        <input type="text" name="nom" class="form-control" value="{{ $devis->nom }}">
                    </div>

                    <div class="form-checkbox-light">
                        <label for=""><b>Adresse</b> </label>
                        <input type="text" name="adresse" class="form-control" value="{{ $devis->adresse }}">
                    </div>

                    <div class="form-checkbox-light">
                        <label for=""><b>GSM</b> </label>
                        <input type="number" name="gsm" class="form-control" value="{{ $devis->gsm }}">
                    </div>

                    <div class="form-checkbox-light">
                        <label for=""><b>Email</b> </label>
                        <input type="email" name="email" class="form-control" value="{{ $devis->email }}">
                    </div>
                    <label for="" style="color: #0a53be">   <b >----------------Devis-------------------</b></label>
                    <br>

                    <div class="form-group">
                        <label for=""><b>Date d'effet</b> </label>
                        <input type="date" name="date_effet" class="form-control" value="{{ $devis->date_effet }}">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Date d'écheance</b></label>
                        <input type="date" name="date_echeance" class="form-control" value="{{ $devis->date_echeance }}">
                    </div>

                    <div class="form-group">
                        <label for=""><b>Pack</b></label>

                        <div class="form-check">
                            <input class="form-check-input" name="nom_pack" type="checkbox" value="Pack Collision" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Pack Collision
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="nom_pack" type="checkbox" value="Pack tous Risques" id="flexCheckChecked" checked >
                            <label class="form-check-label" for="flexCheckChecked">
                                Pack tous Risques
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="nom_pack" value="Pack dommage Collision deplafonne" type="checkbox"  id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Pack dommage Collision deplafonne
                            </label>
                        </div>
                        <br>
                        <label for="" style="color: #0a53be">   <b>----------------Vehicule-------------------</b> </label>
                        <div class="form-checkbox-light">
                            <label for=""><b>Immatriculation</b> </label>
                            <input type="text" name="immatriculation" class="form-control" value="{{ $devis->immatricule }}">
                        </div>


                        <div class="form-checkbox-light">
                            <label for=""><b>Date de circulation</b> </label>
                            <input type="date" name="date_circulation" class="form-control">
                        </div>

                        <div class="form-checkbox-light">
                            <label for=""><b>marque</b> </label>
                            <input type="text" name="marque" class="form-control">
                        </div>

                        <div class="form-checkbox-light">
                            <label for=""><b>Valeur neuf</b> </label>
                            <input type="number" name="val_neuf" class="form-control">
                        </div>

                        <div class="form-checkbox-light">
                            <label for=""><b>Valeur venal</b> </label>
                            <input type="number" name="val_venal" class="form-control">
                        </div>




                        <div class="form-checkbox-light">
                            <label for=""><b>Puissance</b> </label>
                            <input type="number"  name="puissance" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Carburant</b> </label>
                            <div class="form-checkbox-light">

                                <input class="form-check-input" name="carburant" type="checkbox" value="DIESEL" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    DIESEL
                                </label>
                            </div>

                            <div class="form-checkbox-light">

                                <input class="form-check-input" name="carburant" type="checkbox" value="ESSENCE" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ESSENCE
                                </label>
                            </div>
                        </div>
                        <br>






@endsection
