<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function consulta3(){
        $todos = Teacher::all();
        return $todos;
    }
    public function consulta9(){
        $profeId = Teacher::find(1);
        return $profeId;
    }
    public function consulta12(){
        $nombre = Teacher::where('name','Maria')->get();
        return $nombre;
    }
    public function consulta15(){
        $centro = Teacher::with('trainingCenter')->where('training_center_id',1)->get();
        return $centro;
    }
    public function consulta24(){
        return Teacher::where('id', '!=', 3)->get();
    }
    public function consulta34(){
        return Teacher::orderBy('email', 'asc')->get();
    }
    public function consulta40(){
        return Teacher::with('area')->get();
    }
    public function consulta41(){
        return Teacher::with('trainingCenter')->get();
    }
    public function consulta44(){
        return Teacher::with('area')->whereHas('area',function($especifico){
            $especifico->where('name','Sistemas');
        })->get();
    }
    public function consulta46(){
        return Teacher::with('courses')
            ->where('id', 1)
            ->get();
    }
    public function consulta48(){
        return Teacher::withCount('courses')->get();
    }
    public function consulta50(){
        return Teacher::has('courses', '>', 1)
            ->with('courses')
            ->get();
    }
    public function consulta53(){
        return Teacher::withCount('courses')
            ->orderBy('courses_count', 'desc')
            ->first();
    }
    public function consulta57(){
        return Teacher::doesntHave('courses')->get();
    }
    public function consulta66(){
        return Teacher::with('courses')->get();
    }
    public function consulta70(){
        return Teacher::whereHas('area', function ($q) {
            $q->where('name', 'Software');
        })
        ->has('courses', '>', 1)
        ->with(['area', 'courses'])
        ->get();
    }
}
