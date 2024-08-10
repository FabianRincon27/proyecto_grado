@extends('auth.app')
@section('title', 'Iniciar Sesión')
@section('content')
<div class="account-pages my-3 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-warning bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h6 class="text-primary">Bienvenido al sistema de control de acceso de estudiantes TEINCO!</h6>
                                    <p>Ingrese sus credenciales para acceder al sistema.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div class="auth-logo">
                            <a href="{{ route('login.get') }}" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-1">
                            @include('components.alerts')
                            <form class="form-horizontal" action="{{ route('login.post') }}" autocomplete="off" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="identification" class="form-label">Identificación</label>
                                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Ej. 1016498563">
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" name="password" placeholder="************" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>
                                
                                <div class="mt-3 d-grid">
                                    <button class="btn btn-warning waves-effect waves-light" type="submit">Ingresar</button>
                                </div>
                            </form>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection