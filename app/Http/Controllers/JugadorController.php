<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class JugadorController extends Controller
{
    public function create(){
        return view('jugador.create');
    }
    
    public function store(Request $request){
       
        $jug= new Jugador();
        
        $jug->codigo=$request->codigo;
        $jug->nombre=$request->nombre;
        $jug->posicion=$request->posicion;
        $jug->fechanacimiento=$request->fechanacimiento;
         $jug->save();
    
       return($request);
    
         return redirect()->route('jugador.show', $jug->id);
        }
        
        
        public function index(){
        
            $jug = jugador::orderBy('id', 'desc')->get();
            return view('jugador.listar', compact('jug'));
                                
        }
     
        public function destroy (jugador $jugador){
                   
            $jugador->delete();
            return redirect()->route('jugador.index');
        }   
        
        
        public function edit(jugador $jugador){
               
            return view('jugador.edit',compact('jugador'));
        
          }
        
        
          public function update(Request $request, jugador $jugador){
                   
           
            $jugador->codigo = $request->codigo;
            $jugador->nombre = $request->nombre;
            $jugador->posicion = $request->posicion;
            $jugador->fechanacimiento = $request->fechanacimiento;
            $jugador->save();
         
            return redirect()->route('jugador.index');
         
          }
          
        
          public function show ($id){
        
            $jug = jugador::findOrFail($id);
        
            
            return view('jugador.show', compact('jug'));
          
        
        
          }
    
}
