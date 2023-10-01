<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Cliente;
use App\Models\Proceso;
use App\Models\Tramite;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Carbon\Carbon;

class TramiteController extends Controller
{

    public function listado(Request $request){

        $clientes = Cliente::all();

        return view('tramite.listado')->with(compact('clientes'));
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
        $tramites = Tramite::all();
        return view('tramite.ajaxListado')->with(compact('tramites'))->render();
    }

    public function guarda(Request $request){

        $data = array();

        if($request->ajax()){

            if($request->input('tramite_id') === "0")
                $tramite = new Tramite();
            else
                $tramite = Tramite::find($request->input('tramite_id'));

            $tramite->nombre = $request->input('nombre');
            $tramite->cliente_id = $request->input('cliente_id');
            $tramite->descripcion = $request->input('descripcion');
            $tramite->tipo = $request->input('tipo');
            $tramite->estado = $request->input('estado');
            $tramite->personas = $request->input('personas');
            $tramite->fecha_cita = $request->input('fecha_cita');
            $tramite->color = 'red';

            $tramite->save();

            if($request->file('archivo')){
                $archivos = $request->file('archivo');
                foreach ($archivos as $key => $arch) {
                    $archivo                            = $arch;
                    $direccion                          = 'archivoProceso/';
                    $nombreArchivo                      = ($key+1).($tramite->id).date('YmdHis').".".$archivo->getClientOriginalExtension();
                    $archivo->move($direccion,$nombreArchivo);
                    $archivoNew = new Archivo();
                    $archivoNew->nombre                 = $nombreArchivo;
                    $archivoNew->documento_id           = $tramite->id;
                    $archivoNew->tipo                   = 1;
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
            Tramite::destroy($request->input('id'));

            $data['listado']=$this->listadoArray();
            $data['estado'] = 'success';
        }else{
            $data['estado'] = 'error';
        }
        return json_encode($data);
    }

    function verificaHoras(Request $request){

        $tramites = Tramite::all();
        $array = array();

        foreach($tramites as $t){
            // echo $t->fecha_cita;

            $fecha_inicio = Carbon::parse(Carbon::now()->format('Y-m-d H:i:s')); // Fecha y hora de inicio
            $fecha_fin = Carbon::parse($t->fecha_cita); // Fecha y hora de fin

            if ($fecha_inicio->greaterThan($fecha_fin)) {  // Comprobar si ya se ha pasado de la fecha objetivo
                $diferencia = $fecha_inicio->diffInMinutes($fecha_fin, false);  // Calcular la diferencia de tiempo en minutos
                // echo "Ya han pasado " . $diferencia . " minutos desde la fecha objetivo.<br>";

            } else {
                // echo "La fecha objetivo aún no ha llegado.<br>";
                $minutos_restantes = $fecha_inicio->diffInMinutes($fecha_fin);
                // echo $fecha_inicio." | ".$fecha_fin.'Faltan ' . $minutos_restantes . ' minutos.<br>';
                if($minutos_restantes<2){
                    array_push($array,$t->nombre);
                }
            }
        }

        return $array;
    }

    function verificaHorasProceso(Request $request){

        $procesos = Proceso::all();
        $array = array();

        foreach($procesos as $p){
            // echo $p->fecha_cita;

            $fecha_inicio = Carbon::parse(Carbon::now()->format('Y-m-d H:i:s')); // Fecha y hora de inicio
            $fecha_fin = Carbon::parse($p->fecha_cita); // Fecha y hora de fin

            if ($fecha_inicio->greaterThan($fecha_fin)) {  // Comprobar si ya se ha pasado de la fecha objetivo
                $diferencia = $fecha_inicio->diffInMinutes($fecha_fin, false);  // Calcular la diferencia de tiempo en minutos
                // echo "Ya han pasado " . $diferencia . " minutos desde la fecha objetivo.<br>";

            } else {
                // echo "La fecha objetivo aún no ha llegado.<br>";
                $minutos_restantes = $fecha_inicio->diffInMinutes($fecha_fin);
                // echo $fecha_inicio." | ".$fecha_fin.'Faltan ' . $minutos_restantes . ' minutos.<br>';
                if($minutos_restantes<2){
                    array_push($array,$p->nombre);
                }
            }
        }

        return $array;
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
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function show(Tramite $tramite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function edit(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}
