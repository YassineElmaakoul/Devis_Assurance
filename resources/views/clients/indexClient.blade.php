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

                </div>
                <table class="table">

                    <head>

                        <tr>
                            <th>CIN</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Gsm</th>


                        </tr>
                    </head>

                    <tbody>
                    @foreach($clients as $cli)
                        <tr>
                            <td>{{$cli->cin }}</td>
                            <td>{{$cli->prenom }}</td>

                            <td>{{$cli->nom }}</td>
                            <td>{{$cli->adresse}}</td>
                            <td>{{$cli->gsm}}</td>



                        </tr>
                    @endforeach
                    </tbody>

                </table>


            </div>
        </div>
    </div>
    </div>


@endsection
