@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$contents[0]['Nombre']}}</h5>
                  <p class="card-text"><b>NIT:</b> {{$contents[0]['Nit']}}</p>
                  <p class="card-text"><b>REPRESENTANTE LEGAL:</b> {{$contents[0]['Representantelegal']}}</p>
                  <p class="card-text"><b>DIRECCIÓN:</b> {{$contents[0]['Direccion']}}</p>
                  <p class="card-text"><b>TELEFONO:</b> {{$contents[0]['Telefono']}}</p>
                  <a href="{{ url('/empresa')}}">Volver</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection