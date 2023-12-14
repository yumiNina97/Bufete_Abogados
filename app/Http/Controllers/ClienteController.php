<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function listado(Request $request){
        return view('cliente.listado');
    }

    public function ajaxListado(Request $request){
        $data = array();

        if($request->ajax()){
            $data['listado']=$this->listadoArray();
            $data['estado'] = 'success';
        }else{
            $data['estado'] = 'error';
        }

        return json_encode($data);
    }

    protected function listadoArray(){
        $clientes = Cliente::all();
        return view('cliente.ajaxListado')->with(compact('clientes'))->render();
    }

    public function guarda(Request $request){

        $data = array();

        if($request->ajax()){

            if($request->input('cliente_id') === "0"){
                $cliente = new Cliente();
            }else{
                $cliente = Cliente::find($request->input('cliente_id'));
            }

            $cliente->nombres = $request->input('nombres');
            $cliente->ap_paterno = $request->input('ap_paterno');
            $cliente->ap_materno = $request->input('ap_materno');
            $cliente->cedula = $request->input('cedula');
            $cliente->telefonos = $request->input('telefono');
            $cliente->correo = $request->input('correo');
            $cliente->direccion = $request->input('direccion');

            $cliente->save();
            $data['estado'] = 'success';
            $data['listado'] = $this->listadoArray();

        }else{
            $data['estado'] = 'error';
        }

        return json_encode($data);
    }

    public function eliminar(Request $request){
        $data = array();
        if($request->ajax()){
            Cliente::destroy($request->input('id'));

            $data['listado']=$this->listadoArray();
            $data['estado'] = 'success';
        }else{
            $data['estado'] = 'error';
        }
        return json_encode($data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}

