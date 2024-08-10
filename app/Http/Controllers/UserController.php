<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use Hash;

class UserController extends Controller
{
    public function getStudents(){
        $students = User::with(['program'])->orderBy('name', 'asc')->get();
        $programs = Program::orderBy('name', 'asc')->get();
        return view('control_students.students.home', compact('students', 'programs'));
    }

    public function createStudent(Request $request){
        $messages = [
            'name.required' => 'Debe escribir el nombre del estudiante',
            'lastname.required' => 'Debe escribir los apellidos del estudiante',
            'identification.required' => 'Debe escribir la identificación del estudiante',
            'email.required' => 'Debe escribir el correo electrónico del estudiante',
            'gender.required' => 'Debe escoger el genero para el estudiante',
            'program_id.required' => 'Debe escoger un programa para el estudiante',
        ];

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'identification' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'program_id' => 'required',
        ], $messages);

        $student = new User;
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->identification = $request->identification;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->birthdate = $request->birthdate;
        $student->program_id = $request->program_id;
        $student->password = Hash::make($request->identification);
        $student->save();

        return back()->with('message', 'Estudiante creado satisfactoriamente')
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }

    public function updateStudent(Request $request, $id){
        $messages = [
            'name.required' => 'Debe escribir el nombre del estudiante',
            'lastname.required' => 'Debe escribir los apellidos del estudiante',
            'identification.required' => 'Debe escribir la identificación del estudiante',
            'email.required' => 'Debe escribir el correo electrónico del estudiante',
            'gender.required' => 'Debe escoger el genero para el estudiante',
            'program_id.required' => 'Debe escoger un programa para el estudiante',
        ];

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'identification' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'program_id' => 'required',
        ], $messages);

        $student = User::findOrFail($id);
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->identification = $request->identification;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->birthdate = $request->birthdate;
        $student->program_id = $request->program_id;
        $student->save();

        return back()->with('message', 'Estudiante actualizado satisfactoriamente')
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }

    public function deleteStudent($id){
        $student = User::findOrFail($id);

        if(!$student){
            return back()->with('message', 'No se han encontrado ningun registro con ese ID.')
                ->with('type-alert', 'alert-danger')
                ->with('icon','mdi-block-helper');
        }

        $student->status = ($student->status == 'active') ? 'inactive' : 'active';
        $message = ($student->status == 'inactive') ? 'Estudiante inhabilitado satisfactoriamente' : 'Estudiante habilitado satisfactoriamente';
        $student->save();

        return back()->with('message', $message)
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }
}
