@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/arrivedAPI/'.$contents[0]['Id'])}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $contents[0]['Nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="">NIT</label>
                    <input type="text" id="nit" name="nit" class="form-control" value="{{ $contents[0]['Nit'] }}">
                </div>
                <div class="form-group">
                    <label for="">Representante Legal</label>
                    <input type="text" id="reprelegal" name="reprelegal" class="form-control" value="{{ $contents[0]['Representantelegal'] }}">
                </div>
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $contents[0]['Direccion'] }}">
                </div>
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $contents[0]['Telefono'] }}">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div> 
    </div>
</div>

@endsection