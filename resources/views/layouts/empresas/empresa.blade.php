@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">NIT</th>
                <th scope="col">Representante Legal</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col" colspan="2">Opciones</th>
              </tr>
        </thead>
        <tbody>
                @foreach($contents as $c)
                <tr class="text-center">
                    <td>{{$c['Id']}}</td>
                    <td>{{$c['Nombre']}}</td>
                    <td>{{$c['Nit']}}</td>
                    <td>{{$c['Representantelegal']}}</td>
                    <td>{{$c['Direccion']}}</td>
                    <td>{{$c['Telefono']}}</td>
                    <td>
                        <a href="{{url('/empresaShow/'. $c['Id'])}}" class="btn btn-outline-info btn-sm">Ver</a>
                    </td>
                    <td>
                        <a href="{{url('/empresaEdit/'. $c['Id'])}}" class="btn btn-outline-secondary btn-sm">Editar</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection