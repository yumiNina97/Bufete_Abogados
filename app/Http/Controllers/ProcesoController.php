<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Cliente;
use App\Models\Proceso;
use App\Models\Tramite;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{

    public function listado(Request $request){
        $clientes = Cliente::all();

        return view('proceso.listado')->with(compact('clientes'));
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
        $procesos = Proceso::all();
        return view('proceso.ajaxListado')->with(compact('procesos'))->render();
    }

    public function guarda(Request $request){

        $data = array();

        if($request->ajax()){

            if($request->input('proceso_id') === "0"){
                $proceso = new Proceso();
            }else{
                $proceso = Proceso::find($request->input('proceso_id'));
            }

            $proceso->nombre = $request->input('nombre');
            $proceso->descripcion = $request->input('descripcion');
            $proceso->tipo = $request->input('tipo');
            $proceso->estado = $request->input('estado');
            $proceso->personas = $request->input('personas');
            $proceso->fecha_cita = $request->input('fecha_cita');
            $proceso->cliente_id = $request->input('cliente_id');
            $proceso->posicion = $request->input('posicion');
            $proceso->contra_demanda = $request->input('contra_demanda');
            $proceso->color = 'blue';

            $proceso->save();

            if($request->file('archivo')){
                $archivos = $request->file('archivo');
                foreach ($archivos as $key => $arch) {
                    $archivo                            = $arch;
                    $direccion                          = 'archivoProceso/';
                    $nombreArchivo                      = ($key+1).($proceso->id).date('YmdHis').".".$archivo->getClientOriginalExtension();
                    $archivo->move($direccion,$nombreArchivo);
                    $archivoNew = new Archivo();
                    $archivoNew->nombre                 = $nombreArchivo;
                    $archivoNew->documento_id           = $proceso->id;
                    $archivoNew->tipo                   = 2;
                    $archivoNew->save();
                }
            }

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
            Proceso::destroy($request->input('id'));

            $data['listado']=$this->listadoArray();
            $data['estado'] = 'success';
        }else{
            $data['estado'] = 'error';
        }
        return json_encode($data);
    }

    public function procesos(Request $request){
        if($request->ajax()){
            $procesos = Proceso::all();
            $tramites = Tramite::all();

            $eventos = $procesos->concat($tramites);

            $eventos_json = $eventos->map(function($evento) {
                return [
                    'title' => $evento->nombre,
                    'start' => $evento->fecha_cita,
                    'color' => $evento->color,
                    'description' => $evento->descripcion,
                ];
            })->toJson();

        }

        return $eventos_json;
    }

    public function ajaxListadoArchivo(Request $request){
        $data = array();
        if($request->ajax()){
            $proceso_id = $request->input('id');
            $tipo = $request->input('tipo');

            // dd($request->all());

            $archivos           = Archivo::where('documento_id',$proceso_id)
                                        ->where('tipo',$tipo)
                                        ->get();

            $data['listado']    = view('proceso.ajaxListadoArchivo')->with(compact('archivos','proceso_id'))->render();
            $data['estado']     = 'success';
        }else{
            $data['estado']     = 'error';
        }
        return json_encode($data);
    }

    public function eliminarArchivo(Request $request){
        $data = array();
        if($request->ajax()){

            Archivo::destroy($request->input('id'));
            $proceso_id = $request->input('proceso');
            $tipo = $request->input('tipo');


            $archivos           = Archivo::where('documento_id',$proceso_id)
                                        ->where('tipo',$tipo)
                                        ->get();
            $data['listado']    = view('proceso.ajaxListadoArchivo')->with(compact('archivos','proceso_id'))->render();
            $data['estado']     = 'success';
        }else{
            $data['estado']     = 'error';
        }
        return json_encode($data);
    }

    public function agregarNewArchivos(Request $request){
        $data = array();

        if($request->ajax()){

            if($request->file('archivo')){
                $archivos = $request->file('archivo');
                $proceso_id = $request->input('proceso');
                $tipo = $request->input('tipo');
                foreach ($archivos as $key => $arch) {

                    $archivo                            = $arch;
                    $direccion                          = 'archivoProceso/';
                    $nombreArchivo                      = ($key+1).($proceso_id).date('YmdHis').".".$archivo->getClientOriginalExtension();
                    $archivo->move($direccion,$nombreArchivo);

                    $archivoNew = new Archivo();
                    $archivoNew->nombre                 = $nombreArchivo;
                    $archivoNew->documento_id           = $proceso_id;
                    $archivoNew->tipo                   = $tipo;
                    $archivoNew->save();
                }
            }

            $archivos           = Archivo::where('documento_id',$proceso_id)
                                            ->where('tipo', $tipo)
                                            ->get();
            $data['listado']    = view('proceso.ajaxListadoArchivo')->with(compact('archivos','proceso_id'))->render();
            $data['estado']     = 'success';

        }else{
            $data['estado']     = 'error';
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
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show(Proceso $proceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceso $proceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceso $proceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceso $proceso)
    {
        //
    }
}
