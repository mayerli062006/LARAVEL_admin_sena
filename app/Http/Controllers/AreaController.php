<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    //
    public function consulta5(){
        $todos = Area::all();
        return $todos;
    }
    public function consulta29(){
        return Area::where('name', 'like', '%soft%')->get();
    }
    public function consulta54(){
        return Area::withCount('courses')
            ->orderBy('courses_count', 'desc')
            ->first();
    }
    public function consulta58(){
        return Area::doesntHave('courses')->get();
    }
    public function consulta62(){
        return Area::withCount('courses')->get();
    }
    public function consulta63(){
        return Area::withCount('teachers')->get();
    }
    public function consulta67(){
        return Area::withCount('teachers')->get();
    }
    public function create(){
        return view('area.create');
    }
    public function salida(Request $peticion){
        $areas = new Area();
        $areas->name=$peticion->name;
        $areas->save();
        return $areas;
    }
}
