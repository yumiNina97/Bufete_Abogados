<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proceso;
use App\Models\Tramite;
use Illuminate\Http\Request;

use PDF;

class ReporteController extends Controller
{
    public function listado(Request $request){
        return view('reporte.listado');
    }

    public function ajaxListadoCliente(Request $request){
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
        return view('reporte.ajaxListadoCliente')->with(compact('clientes'))->render();
    }

    public function buscaCliente(Request $request){
        $data = array();
        if($request->ajax()){

            $query = Cliente::query();

            if(!is_null($request->input('busca_cedula'))){
                $variable = $request->input('busca_cedula');
                $query->where('cedula','like',"%$variable%");
            }
            if(!is_null($request->input('busca_paterno'))){
                $variable = $request->input('busca_paterno');
                $query->where('ap_paterno','like',"%$variable%");
            }
            if(!is_null($request->input('busca_materno'))){
                $variable = $request->input('busca_materno');
                $query->where('ap_materno','like',"%$variable'%");
            }
            if(!is_null($request->input('busca_nombre'))){
                $variable = $request->input('busca_nombre');
                $query->where('nombres','like',"%$variable%");
            }

            $clientes = $query->get();

            $data['listado']    = view('reporte.ajaxListadoCliente')->with(compact('clientes'))->render();
            $data['estado']     = 'success';
        }else{
            $data['estado'] = 'error';
        }

        return json_encode($data);

    }

    public function generaPdf(Request $request, $cliente_id, $fecha_ini, $fecha_fin){

        $cliente = Cliente::find($cliente_id);

        $procesos = Proceso::where('cliente_id', $cliente->id)
                            ->whereBetween('created_at',[$fecha_ini." 00:00:00", $fecha_fin." 23:59:59"])
                            ->get();

        $tramites = Tramite::where('cliente_id', $cliente->id)
                            ->whereBetween('created_at',[$fecha_ini." 00:00:00", $fecha_fin." 23:59:59"])
                            ->get();

        // dd($cliente_id, $tipo);
        $users = Cliente::all();

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => $users,
            'procesos' => $procesos,
            'tramites' => $tramites,
            'cliente' => $cliente
        ];

        $pdf = PDF::loadView('reporte.generaPdf', $data);

        // return $pdf->download('itsolutionstuff.pdf');
        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function generaPdfProceso(Request $request, $fecha_ini, $fecha_fin){

        $procesos = Proceso::join('clientes', 'clientes.id', '=','procesos.cliente_id')
                            ->whereBetween('procesos.created_at',[$fecha_ini." 00:00:00",$fecha_fin." 23:59:59"])
                            ->orderBy('clientes.ap_paterno', 'ASC')
                            ->get();

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'procesos' => $procesos,
        ];

        $pdf = PDF::loadView('reporte.generaPdfProceso', $data);

        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function generaPdfTramite(Request $request, $fecha_ini, $fecha_fin){

        $tramites = Tramite::join('clientes', 'clientes.id', '=','tramites.cliente_id')
                            ->whereBetween('tramites.created_at',[$fecha_ini." 00:00:00",$fecha_fin." 23:59:59"])
                            ->orderBy('clientes.ap_paterno', 'ASC')
                            ->get();

        $data = [
        'title' => 'Welcome to ItSolutionStuff.com',
        'date' => date('m/d/Y'),
        'procesos' => $tramites,
        ];

        $pdf = PDF::loadView('reporte.generaPdfTramite', $data);

        return $pdf->stream('itsolutionstuff.pdf');
    }
}
