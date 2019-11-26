<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Afiliado;


use App\Historialc;

class ApiController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function myLists(Request $request)
    {
    	$afiliado = Afiliado::with('user_imagen')->where('user_id', auth()->user()->id)->OrderBy('created_at', 'DESC')->get();

    	return $afiliado;

    }


    public function listsContratado(Request $request)
    {
    	$afiliado = Afiliado::with('user_imagen')->where('estado', true)->OrderBy('created_at', 'DESC')->get();

    	return $afiliado;

    }

  public function addAfiliado(Request $request)
  {
    
        $this->validate($request, [
          'tipo_dni'  =>  'required|numeric',
          'dni' =>  'required|unique:afiliados',
          'nombre'    =>  'required',
          'apellido'  =>  'required',
          'telefono'  =>  'required|numeric',
          'pais'      =>  'required|numeric'
        ]);
    
        $afiliado = Afiliado::create([
          'nombre'    => $request->get('nombre'),
          'apellido'  => $request->get('apellido'),
          'telefono'  => $request->get('telefono'),
          'dni'       => $request->get('dni'),
          'tipo_dni'  => $request->get('tipo_dni'),
          'pais_id'   => $request->get('pais'),  
          'user_id'   => auth()->user()->id,
          'estado'    => true
        ]);
        
    return $afiliado;
  }

  public function historialAfiliado(Request $request, $id)
  {
        $user = auth()->user();
    
        $historial = Afiliado::findOrFail($id);
    
        if($user->id == $historial->user_id){
          
           $consorcio = $user->consorcio->first();
    
            $history = Historialc::create([
              'afiliado_id'   => $historial->id,
              'consorcio_id'  => $consorcio->id,
              'incidencia_id' => $request->get('incidencia'),
              'nota'           => $request->get('nota'),
              'puntuacion'    => $request->get('puntuacion')
            ]);

            return $history;
        } else {
          
          return 'Lo sentimos este afiliado no le pertenece';
        }
      
    
  }



  public function liberar(Request $request, $id)
  {
         $user = auth()->user();
      
        $liberar = Afiliado::findOrFail($id);
    
        if($user->id == $liberar->user_id){
          
            $liberar->user_id = 2;
          
            $liberar->estado = false;

            $liberar->save();

            return;
          
        }
    
  }
  
  public function contratar(Request $request, $id)
  {
      $user = auth()->user();
     
      $contratar = Afiliado::findOrFail($id);
    
      $contratar->user_id = $user->id;
          
      $contratar->estado = true;

      $contratar->save();

      return;
  }



    public function sinContratoLists(Request $request)
    {
    	$afiliado = Afiliado::with('user_imagen')->where('user_id', 2)->OrderBy('created_at', 'DESC')->get();

    	return $afiliado;

    }


    public function perfil($id)
    {
        $afiliado = Afiliado::findOrFail($id);

        return $afiliado;
    }
  
}
