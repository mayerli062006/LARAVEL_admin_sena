<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use PhpParser\Node\Expr\FuncCall;

class ApprenticeController extends Controller
{
    //
    public function consulta1(){
        $todos = Apprentice::all();
        return $todos;
    }
    public function consulta8(){
        $aprendizId = Apprentice::find(1);
        return $aprendizId;
    }
    public function consulta11(){
        $nombre = Apprentice::where('name_apren','Carlos')->get();
        return $nombre;
    }
    public function consulta16(){
        $apren = Apprentice::with('course')->where('course_id',5)->get();
        return $apren;
    }
    public function consulta20(){
        $correo = Apprentice::where('email','like','%sena%')->get();
        return $correo;
    }
    public function consulta23(){
        return Apprentice::whereBetween('id', [10, 20])->get();
    }
    public function consulta26(){
        return Apprentice::where('name_apren', 'like', '%ez')->get();
    }
    public function consulta31(){
        return Apprentice::orderBy('name_apren', 'asc')->get();
    }
    public function consulta32(){
        return Apprentice::orderBy('name_apren', 'desc')->get();
    }
    public function consulta36(){
        return Apprentice::with('course')->get();
    }
    public function consulta37(){
        return Apprentice::with('computer')->get();
    }
    public function consulta42(){
        $listas = Apprentice::with('course')->whereHas('course',function($condicion){
            $condicion->where('name_curso','Contabilidad Basica');
        })->get();
        return $listas;
    }
    public function consulta65(){
        return Apprentice::with(['course', 'computer'])->get();
    }
}
