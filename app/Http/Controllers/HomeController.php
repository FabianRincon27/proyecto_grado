<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;
use App\Models\User;

class HomeController extends Controller
{
    public function getHome(){
        $programsWithStudents = Program::with(['students'])->orderBy('name', 'asc')->get();
        return view('control_students.home.home', compact('programsWithStudents'));
    }
}
