<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class MainController extends Controller
{
    public function index()
    {

        $students = Student::all();
        dd($students);

        return view("home");
    }
}
