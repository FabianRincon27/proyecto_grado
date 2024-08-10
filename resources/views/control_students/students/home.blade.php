@extends('control_students.layouts.app');
@section('title', 'Estudiantes')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Estudiantes</h4>
    
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                                    <li class="breadcrumb-item active">Estudiantes</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#add-student"><i class='bx bx-plus-medical'></i> Crear Estudiante</button>
                            @include('control_students.students.modals.add-student')
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @include('components.alerts')
                                <div class="table-responsive">
                                    <table class="table table-striped data-table fs-6">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>N°. Identificación</th>
                                            <th>Correo Electrónico</th>
                                            <th>Programa</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                                @include('control_students.students.modals.update-student')
                                                <tr>
                                                    <td>{{ $student->name }} {{ $student->lastname }}</td>
                                                    <td>{{ $student->identification }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td>{{ $student->program->name }}</td>
                                                    <td>
                                                        <span class="badge {{ $student->status === 'active' ? 'badge-soft-success' : 'badge-soft-danger' }}">
                                                            {{ $student->status === 'active' ? 'Activo' : 'Inactivo' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-betweens">
                                                            <div>
                                                                <button class="btn btn-warning btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#edit-student-{{ $student->id }}">
                                                                    <i class="bx bx-edit"></i>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('student.delete', $student->id) }}" method="post"
                                                                autocomplete="off" id="delete_form_{{ $student->id }}">
                                                                @csrf
                                                                <button class="btn {{ $student->status === 'active' ? 'btn-danger' : 'btn-success' }} btn-sm waves-effect waves-light ms-1"
                                                                    type="button" onclick="confirmDelete({{ $student->id }}, `{{ $student->status }}` ,'el estudiante')">
                                                                        @switch($student->status)
                                                                        @case('inactive')
                                                                            <i class="bx bx-check-circle"></i>
                                                                            @break
                                                                        @case('active')
                                                                            <i class="bx bx-trash"></i>
                                                                            @break
                                                                    @endswitch
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
