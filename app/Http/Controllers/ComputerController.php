<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    //
    public function consulta6(){
        $todos = Computer::all();
        return $todos;
    }
    public function consulta17(){
        $lenovo = Computer::where('marca','Lenovo')->get();
        return $lenovo;
    }
    public function consulta18(){
        $hp = Computer::where('marca','HP')->get();
        return $hp;
    }
    public function consulta21(){
        return Computer::where('id', '>', 10)->get();
    }
    public function consulta28(){
        return Computer::whereBetween('numero', [1, 5])->get();
    }
    public function consulta35(){
        return Computer::orderBy('marca', 'asc')->get();
    }
    public function consulta60(){
        return Computer::doesntHave('apprentice')->get();
    }
    public function operacion(){
        return view('computer.computador');
    }
    public function salir(Request $comillas){
        $manejo = new Computer();
        $manejo->numero = $comillas->numero;
        $manejo->marca = $comillas->marca;
        $manejo->save();
        return $manejo;
    }
}
