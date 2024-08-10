<div class="modal fade bs-example-modal-sm" id='add-student' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Crear Estudiante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.create') }}" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="name" class="form-label">Nombre*</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ej. Oscar Fabian" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="lastname" class="form-label">Apellidos*</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ej. Rincon Hernandez" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="identification" class="form-label">Identificación*</label>
                            <input type="number" class="form-control" id="identification" name="identification" placeholder="Ej. 162345986" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ej. 320 456 89 87">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="address" class="form-label">Dirección de residencia</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Ej. Calle 65 #118C 56">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="email" class="form-label">Correo Elctrónico*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ej. Fabian.rincon@gmail.com" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Ej. Fabian.rincon@gmail.com" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="birthdate" class="form-label">Genero*</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="" selected>Seleccione...</option>
                                <option value="male">Masculino</option>
                                <option value="female">Femenino</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="program_id" class="form-label">Programa*</label>
                            <select name="program_id" id="program_id" class="form-select" required>
                                <option value="" selected>Seleccione...</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm mb-2" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light btn-sm mb-2 ms-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>