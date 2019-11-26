<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Afiliado;

use App\Historialc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function perfil($id)
    {
        $afiliado = Afiliado::findOrFail($id);

        return view('pages.perfil', compact('afiliado'));
    }


    public function listSinContratar()
    {
        return view('pages.list-sin-contratar');
    }

     public function listContratados()
    {
        return view('pages.contratados');
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

            return redirect()->back();
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

            return redirect()->back();
          
        }
    
  }

    public function contratar(Request $request, $id)
  {
      $user = auth()->user();
     
      $contratar = Afiliado::findOrFail($id);
    
      $contratar->user_id = $user->id;
          
      $contratar->estado = true;

      $contratar->save();

       return redirect()->back();
  }

}
