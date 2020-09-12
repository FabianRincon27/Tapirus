<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET', 'http://www.tapirusit.com:8091/v1/Empresa/GetAll', [
            'headers' => [
                'Authorization' => 'Bearer '.Auth::user()->token,
                'Accept' => 'application/json',
            ],
        ]);
        $contents = $response->getBody()->getContents(); // TRAER DATOS
        $contents = json_decode($contents, true); // GENERARLO EN UN ARRAY
        return view('layouts.empresas.empresa', compact('contents'));
    }

    public function edit($id){
        $client = new Client();
        $response = $client->request('GET', 'http://www.tapirusit.com:8091/v1/Empresa/EmpresaById/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer '.Auth::user()->token,
                'Accept' => 'application/json',
            ],
        ]);
        $contents = $response->getBody()->getContents(); // TRAER DATOS
        $contents = json_decode($contents, true); // GENERARLO EN UN ARRAY
        return view('layouts.empresas.empresaEdit', compact('contents'));
    }

    public function arrivedAPI($id, Request $request){
        $client = new Client();
        $response = $client->post('http://www.tapirusit.com:8091//v1/Empresa/CrearEmpresa', [
            \GuzzleHttp\RequestOptions::JSON => [
                "Id" => $id,
                "Nombre" => $request->get('nombre'),
                "Nit" => $request->get('nit'),
                "Representantelegal" => $request->get('reprelegal'),
                "Direccion" => $request->get('direccion'),
                "Telefono" => $request->get('telefono'),
                "Activo" => true,
                "FechaCreacion" => "2020-09-10T13:18:38.642Z",
                "DescActivo" => ""
            ], 
            'headers' => [
                'Authorization' => 'Bearer '.Auth::user()->token,
                'Accept' => 'application/json',
            ] 
        ]);

        return redirect('empresa');
    }

    public function showAPI($id){
        $client = new Client();
        $response = $client->request('GET', 'http://www.tapirusit.com:8091/v1/Empresa/EmpresaById/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer '.Auth::user()->token,
                'Accept' => 'application/json',
            ],
        ]);
        $contents = $response->getBody()->getContents(); // TRAER DATOS
        $contents = json_decode($contents, true); // GENERARLO EN UN ARRAY
        return view('layouts.empresas.empresaShow', compact('contents'));
    }

}
