<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('Inicio');
    }

    public function nosotros($nombre= null)
    {   
      // Declaracion del arreglo estatico 
      $equipo = ['Ingnacio','Pedro','Natalia','Gustavo','Karla','Carlos'];
      return view('Nosotros',compact('equipo','nombre'));// foto
      
    }

    public function blogs()
    {
     return view('Blog');
    }
 
    public function album()
    {
     return view('Album');
    }

    public function nota()
    {
      $notas = App\Nota::paginate(4);

     return view('Notas',compact('notas'));
    }

    public function detalle($id)
    {
      $nota = App\Nota::findOrFail($id);

     return view('notas.detalle',compact('nota'));
    }
    
    public function crear(Request $request)
    {
   // return $request->all();
   $request->validate([
    'nombre' => 'required',
    'descripcion'=> 'required'
  ]);
     $notaNueva = new App\Nota;
     $notaNueva->nombre = $request->nombre;
     $notaNueva->descripcion = $request->descripcion;
    
     $notaNueva->save();

     return back()->with('mensaje','Nota agregada correctamente !!');

    }
    

public function editar ($id)
{
  $nota = App\Nota::findOrFail($id);
  return view('notas.editar',compact('nota'));

}

public function update (Request $request, $id)
{
  $notaUpdate = App\Nota::findOrFail($id);
  $notaUpdate->nombre = $request->nombre;
  $notaUpdate->descripcion = $request->descripcion;

  $notaUpdate->save();

  return back()->with('mensaje','Nota actualizada');

}

public function eliminar ($id)
{
  $notaEliminar = App\Nota::findOrFail($id);
  $notaEliminar->delete();
  return back()->with('mensaje',' Nota Eliminada !!');

}



}
