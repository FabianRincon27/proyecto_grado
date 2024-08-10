@extends('control_students.layouts.app');
@section('title', 'Inicio')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <h5 class="mb-3">Cantidad de estudiantes por programa</h5>
                    @foreach ($programsWithStudents as $program)
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">
                                                {{ $program->name }}
                                                <br>
                                                <span class="badge {{ $program->status === 'active' ? 'badge-soft-success' : 'badge-soft-danger' }}">
                                                    {{ $program->status === 'active' ? 'Activo' : 'Inactivo' }}
                                                </span>
                                            </p>
                                            
                                            <h6 class="mb-0">{{ $program->students->count() === 1 ? $program->students->count() . ' Estudiante' : $program->students->count() . ' Estudiantes' }}</h6>
                                        </div>
                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle">
                                                <span class="avatar-title {{ $program->color }}">
                                                    <i class="bx {{ $program->icon }} font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
