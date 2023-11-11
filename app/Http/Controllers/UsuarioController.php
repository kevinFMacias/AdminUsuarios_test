<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function  index(){
        return Usuario::all();
    }

    public function store(Request $request){
        $usuarios= new Usuario();
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->correo = $request->correo;
        $usuarios->fecha_registro = $request->fecha_registro;
        $usuarios->timestamp = $request->timestamp;
        $usuarios->save();
        return 'usuarios guardado correctamente';
    }

    public function show(Request $request,$id){
        $usuarios= Usuario::find($id);
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->correo= $request->correo;
        $usuarios->fecha_registro = $request->fecha_registro;
        $usuarios->timestamp = $request->timestamp;
        $usuarios->save();
        return 'usuarios actualizado correctamente';
    }
    
    
    public function update(Request $request,$id){
        $usuarios= Usuario::find($id);
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->correo= $request->correo;
        $usuarios->fecha_registro = $request->fecha_registro;
        $usuarios->timestamp = $request->timestamp;
        $usuarios->save();
        return 'usuarios actualizado correctamente';
    }

    public function delete($id){
        $usuarios= Usuario::find($id);
        $usuarios->delete();
        return 'usuarios eliminado correctamente';
    }
}