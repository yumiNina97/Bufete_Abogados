<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function listado(Request $request){
        $roles = Rol::all();

        return view('user.listado')->with(compact('roles'));
    }


    public function ajaxListado(Request $request){
        $data = array();
        if($request->ajax()){
            $data['estado'] = 'success';
            $data['listado'] = $this->listadoArray();
        }else{
            $data['estado'] = 'error';
        }

        return json_encode($data);
    }

    protected function listadoArray(){
        $usuarios = User::all();
        return view("user.ajaxListado")->with(compact('usuarios'))->render();
    }

    public function guarda(Request $request){
        $data = array();
        if($request->ajax()){

            $user = new User();

            $user->nombres      = $request->input('nombres');
            $user->ap_paterno   = $request->input('ap_paterno');
            $user->ap_materno   = $request->input('ap_materno');
            $user->name         = $request->input('nombres')." ".$request->input('ap_paterno')." ".$request->input('ap_materno');
            $user->cedula       = $request->input('cedula');
            $user->email        = $request->input('email');
            $user->rol_id       = $request->input('rol_id');
            $user->direccion    = $request->input('direccion');
            $user->password     = Hash::make($request->input('password'));

            if($request->input('rol_id') == 1){
                $user->permisos = json_encode(["USR","ROL","CLI","PRO","TRA"]);
            }else if($request->input('rol_id') == 2){
                $user->permisos = json_encode(["CLI","PRO","TRA"]);
            }else if($request->input('rol_id') == 3){
                $user->permisos = json_encode(["CLI"]);
            }

            $user->save();

            $data['estado'] = 'success';
            $data['listado'] = $this->listadoArray();
        }else{
            $data['estado'] = 'error';
        }

        return json_encode($data);
    }

    public function ajaxPermisos(Request $request){
        $data = array();

        if($request->ajax()){
            $usuario = User::find($request->input('id'));
            $permisos = json_decode($usuario->permisos, true);
            $data['permisos'] = view("user.ajaxPermisos")->with(compact('permisos','usuario'))->render();
            $data['estado'] = "success";
        }else{
            $data['estado'] = "error";
        }
        return json_encode($data);
    }

    public function ajaxGuardaPermisos(Request $request){
        if($request->ajax()){
            $usuario = User::find($request->input('usuario'));

            $usuario->permisos = $request->input('datos');

            $usuario->save();
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
