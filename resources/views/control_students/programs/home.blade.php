@extends('control_students.layouts.app');
@section('title', 'Programas')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Programas</h4>
    
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                                    <li class="breadcrumb-item active">Programas</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#add-program"><i class='bx bx-plus-medical'></i> Crear Programa</button>
                            @include('control_students.programs.modals.add-program')
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @include('components.alerts')
                                <div class="table-responsive">
                                    <table class="table table-striped data-table fs-6">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($programs as $program)
                                                @include('control_students.programs.modals.update-program')
                                                <tr>
                                                    <td>{{ $program->name }}</td>
                                                    <td class="text-justify">{{ $program->description }}</td>
                                                    <td>
                                                        <span class="badge {{ $program->status === 'active' ? 'badge-soft-success' : 'badge-soft-danger' }}">
                                                            {{ $program->status === 'active' ? 'Activo' : 'Inactivo' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-betweens">
                                                            <div>
                                                                <button class="btn btn-warning btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#edit-program-{{ $program->id }}">
                                                                    <i class="bx bx-edit"></i>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('program.delete', $program->id) }}" method="post"
                                                                autocomplete="off" id="delete_form_{{ $program->id }}">
                                                                @csrf
                                                                <button class="btn {{ $program->status === 'active' ? 'btn-danger' : 'btn-success' }} btn-sm waves-effect waves-light ms-1"
                                                                    type="button" onclick="confirmDelete({{ $program->id }}, `{{ $program->status }}` ,'el programa')">
                                                                        @switch($program->status)
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
