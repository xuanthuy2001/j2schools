<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

      public function index()
      {
            $students = Student::all();
            return view('students.index', ['students' => $students]);
      }
      public function create()
      {
            return view('students.create');
      }
      public function store(Request $request)
      {
            // dd($request['gender']);

            $students = new Student();
            $students->first_name = $request->get('firts_name');
            $students->last_name = $request->get('last_name');
            $students->gender = $request->get('gender');
            $students->birthdate = $request->get('birthdate');
            $students->save();
      }
}