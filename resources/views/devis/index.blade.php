@extends('layouts.master')



@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                   {{ session()->get('success') }}
                </div>
                @endif
<div class="align-content-center">
                    <a class="btn btn-outline-primary" href="{{url('devis/create')}}" role="button">+ phpNouveau devis</a>
</div>
    <table class="table">

                    <head>

                    <tr>
                        <th>N°</th>
                        <th>Immatriculation</th>
                        <th>Date d'effet</th>
                        <th>Date d'echeance</th>
                        <th>Pack</th>


                    </tr>
                    </head>

                    <tbody>
                    @foreach($devis as $devi)
                    <tr>
                        <td>{{$devi->num_devis }}</td>
                        <td>{{$devi->immatricule }}</td>

                        <td>{{$devi->date_effet }}</td>
                        <td>{{$devi->date_echeance}}</td>
                        <td>{{$devi->nom_pack}}</td>
                        <td> <a class="btn btn-outline-primary" href="{{'devis/'.$devi->num_devis.'/show'}}">Export to PDF</a> </td>




                        <td>

                        <form action="{{url('devis/'.$devi->num_devis)}}" method="">

                            {{ csrf_field()}}
                            {{ method_field('DELETE')}}
                            <a class="btn btn-primary" href="{{'devis/'.$devi->num_devis.'/show'}}" role="button">Details</a>
                            <a class="btn btn-light" href="{{url('devis/'.$devi->num_devis.'/edit')}}" role="button">Editer</a>
                            <a class="btn btn-danger"  href="{{url('devis/'.$devi->num_devis)}}" role="button" >Supprimer</a>
                        </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>


                </div>
            </div>
        </div>
    </div>


@endsection
