<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;
use produccion\Http\Requests;
use produccion\Usuario;
use Illuminate\Support\Facades\Redirect;
use produccion\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
       if($request)
        {
          $query = trim($request->get('searchText'));
          $u = DB::table('usuario')->where ('Nom' , 'LIKE', '%'.$query.'%')
               ->orwhere ('Ap',  'LIKE', '%'.$query.'%')
               ->orwhere('User', 'LIKE', '%'.$query.'%')
               ->paginate(10);


          return  view('Usuario.usuario.index',["u"=>$u,"searchText"=>$query]);
        }
    }

    public function create()
    {
       return view("Usuario.usuario.create");
    }

    public function store(UsuarioFormRequest $request)
    {
       $us = new Usuario;
       $us->Nom = $request->get('N');
       $us->Ap = $request->get('A');
       $us->User = $request->get('U');
       $us->Pass = $request->get('C');
       $us->Dpto= $request->get('D');
       $us->Puesto = $request->get('P');
       $us->Rol = $request->get('R');

       $us -> save();
       return Redirect::to ('Usuario/usuario');

    }

    public function show($id)
    {
       return view("Usuario.usuario.show",["us"=>Usuario::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("Usuario.usuario.edit",["us"=>Usuario::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request,$id)
    {
        $us = Usuario::findOrFail($id);
        $us->Nom = $request->get('N');
        $us->Ap = $request->get('A');
        $us->User = $request->get('U');
        $us->Pass = $request->get('C');
        $us->Dpto= $request->get('D');
        $us->Puesto = $request->get('P');
        $us->Rol = $request->get('R');
         
        $us -> update();
        return Redirect:: to ('Usuario/usuario');
    }

    public function destroy($id)
    {
        $us = Usuario::findOrFail($id);
        $us->Nom = $request->get('N');
        $us->Ap = $request->get('A');
        $us->User = $request->get('U');
        $us->Pass = $request->get('C');
        $us->Dpto= $request->get('D');
        $us->Puesto = $request->get('P');
        $us->Rol = $request->get('R');
         
        $us -> delete();
        return Redirect:: to ('Usuario/usuario');
    }
}
