<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrador\Rol;
use App\Models\Administrador\Menu;

class MenuRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $menus = Menu::getMenu();
        $menusRols = Menu::with('roles')->get()->pluck('roles', 'id')->toArray();
        return view('administrador.menu-rol.index', compact('rols', 'menus', 'menusRols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if($request->ajax()){
            $menus = new Menu();
            if ($request->input('estado') == 1) {
                $menus->find($request->input('menu_id'))->roles()->attach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El menú se asignó correctamente']);
            }else{
                $menus->find($request->input('menu_id'))->roles()->detach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El menú se desasignó correctamente']);
            }
        }else{
            abort(404);
        }
    }
}
