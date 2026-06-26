<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    //
    public function consulta4(){
        $todos = Training_center::all();
        return $todos;
    }
    public function consulta19(){
        $ciudad = Training_center::where('location','Cali')->get();
        return $ciudad;
    }
    public function consulta30(){
        return Training_center::where('name', 'like', '%tele%')->get();
    }
    /*public function consulta55(){
        return Training_center::withCount('courses')
            ->orderBy('courses_count', 'desc')
            ->first();
    }*/
    /*public function consulta59(){
        return Training_center::doesntHave('courses')->get();
    }*/
    /*public function consulta64(){
        return Training_center::withCount('courses')->get();
    }*/
    public function consulta68(){
        return Training_center::withCount('teachers')->get();
    }
    public function operador(){
        return view('trainingcenter.registro');
    }
    public function recurso(Request $request){
        $constructor = new Training_center();
        $constructor->name = $request->name;
        $constructor->location = $request->location;
        $constructor->save();
        return $constructor;

    }
}
