<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function getPrograms(){
        $programs = Program::orderBy('name', 'asc')->get();
        return view('control_students.programs.home', compact('programs'));
    }

    public function createProgram(Request $request){
        $messages = [
            'name.required' => 'Debe escribir un nombre para el programa',
            'icon.required' => 'Debe indicar un icono para el programa',
            'color.required' => 'Debe escribir un color para el programa',
        ];

        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'color' => 'required',
        ], $messages);

        $program = new Program;
        $program->name = $request->name;
        $program->description = $request->description;
        $program->icon = $request->icon;
        $program->color = $request->color;
        $program->save();

        return back()->with('message', 'Programa creado satisfactoriamente')
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }

    public function updateProgram(Request $request, $id){
        $messages = [
            'name.required' => 'Debe escribir un nombre para el programa',
            'icon.required' => 'Debe indicar un icono para el programa',
            'color.required' => 'Debe escribir un color para el programa',
        ];

        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'color' => 'required',
        ], $messages);

        $program = Program::findOrFail($id);
        $program->name = $request->name;
        $program->description = $request->description;
        $program->icon = $request->icon;
        $program->color = $request->color;
        $program->save();

        return back()->with('message', 'Programa actualizado satisfactoriamente')
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }

    public function deleteProgram($id){
        $program = Program::findOrFail($id);

        if(!$program){
            return back()->with('message', 'No se han encontrado ningun registro con ese ID.')
                ->with('type-alert', 'alert-danger')
                ->with('icon','mdi-block-helper');
        }

        $program->status = ($program->status == 'active') ? 'inactive' : 'active';
        $message = ($program->status == 'inactive') ? 'Programa inhabilitado satisfactoriamente' : 'Programa habilitado satisfactoriamente';
        $program->save();

        return back()->with('message', $message)
            ->with('type-alert', 'alert-success')
            ->with('icon','mdi-check-circle-outline');
    }
}
