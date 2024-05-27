<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $listUsuarios = Usuario::all();
            return $listUsuarios;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $usuario = new Usuario();

            $usuario->name      = $request->name;
            $usuario->last_name = $request->last_name;
            $usuario->phone     = $request->phone;
            $usuario->email     = $request->email;
            $usuario->created_at = date('Y-m-d H:i:s');
            $usuario->updated_at = date('Y-m-d H:i:s');

            $usuario->save();

            return $usuario;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $usuario = Usuario::find($id);
            return $usuario;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
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
        try {
            $usuario = Usuario::find($id);

            $usuario->name      = $request->name;
            $usuario->last_name = $request->last_name;
            $usuario->phone     = $request->phone;
            $usuario->email     = $request->email;

            $usuario->save();

            return $usuario;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $usuario = Usuario::find($id);
            $usuario->delete();

            return "Usuario Eliminado Exitosamente";
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }
}
