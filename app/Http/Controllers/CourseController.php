<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function consulta2(){
        $todos = Course::all();
        return $todos;
    }
    public function consulta7(){
        $cursoId = Course::find(1);
        return $cursoId;
    }
    public function consulta10(){
        $lista = Course::select('name_curso')->get();
        return $lista;
    }
    public function consulta13(){
        $area = Course::with('area')->where('area_id',1)->get();
        return $area;
    }
    public function consulta14(){
        $area2 = Course::with('area')->where('area_id',2)->get();
        return $area2;
    }
    public function consulta22(){
        return Course::where('id', '<', 5)->get();
    }
    public function consulta25(){
        return Course::where('name_curso', 'like', '%an%')->get();
    }
    public function consulta33(){
        return Course::orderBy('name_curso', 'asc')->get();
    }
    public function consulta38(){
        return Course::with('area')->get();
    }
    public function consulta39(){
        return Course::with('training_center')->get();
    }
    public function consulta43(){
        return Course::with('area')->whereHas('area',function($manejo){
            $manejo->where('name','Sistemas');
        })->get();
    }
    /*public function consulta45(){
        return Course::with('training_center')->whereHas('training_center',function($manejo){
            $manejo->where('name','Centro de Comercio y Servicios');
        })->get();
    }*/
    public function consulta47(){
        return Course::with('teachers')
            ->where('id', 1)
            ->get();
    }
    public function consulta49(){
        return Course::withCount('teachers')->get();
    }
    public function consulta51(){
        return Course::withCount('apprentices')
            ->orderBy('apprentices_count', 'desc')
            ->first();
    }
    public function consulta52(){
        return Course::withCount('apprentices')
            ->orderBy('apprentices_count', 'asc')
            ->first();
    }
    public function consulta56(){
        return Course::doesntHave('apprentices')->get();
    }
    public function consulta61(){
        return Course::withCount('apprentices')->get();
    }
    public function consulta69(){
        return Course::has('apprentices', '>', 10)->get();
    }
}
