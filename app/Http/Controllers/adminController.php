<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('dashboard/dashboard');
    }

    public function students(){
        $students = student::all();
        return view('dashboard/students',['students' => $students]);
    }

    public function addStudents(Request $request){
        // dd($request->post());
        $validetor = $request->validate([
            'name' => 'required|max:124',
            'adno' =>  'required|max:3|min:3',
            'class' => 'required'
        ]);
        student::create($validetor);
        return back();
    }
}
