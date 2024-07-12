<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function create(){
        return view('partido.create');
    }
    
    public function store(Request $request){
       
        $par= new partido();
        
        $par->codigo=$request->codigo;
        $par->golesafuera=$request->golesafuera;
        $par->golescasa=$request->golescasa;
        $par->fecha=$request->fecha;
         $par->save();
    
       return($request);
    
         return redirect()->route('partido.show', $par->id);
        }
        
        
        public function index(){
        
            $par = partido::orderBy('id', 'desc')->get();
            return view('partido.listar', compact('par'));
                                
        }
     
        public function destroy (partido $partido){
                   
            $partido->delete();
            return redirect()->route('partido.index');
        }   
        
        
        public function edit(partido $partido){
               
            return view('partido.edit',compact('partido'));
        
          }
        
        
          public function update(Request $request, partido $partido){
                   
           
            $partido->codigo = $request->codigo;
            $partido->golesafuera = $request->golesafuera;
            $partido->golescasa = $request->golescasa;
            $partido->fecha = $request->fecha;
            $partido->save();
         
            return redirect()->route('partido.index');
         
          }
          
        
          public function show ($id){
        
            $par = partido::findOrFail($id);
        
            
            return view('partido.show', compact('par'));
          
        
        
          }
}
