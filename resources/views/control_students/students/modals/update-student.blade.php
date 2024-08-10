<div class="modal fade bs-example-modal-sm" id='edit-student-{{ $student->id }}' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Actualizar programa <b>{{ $student->name }}</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.update', $student->id) }}" autocomplete="off" class="mb-0" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="name" class="form-label">Nombre*</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ej. Oscar Fabian" required value="{{ $student->name }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="lastname" class="form-label">Apellidos*</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ej. Rincon Hernandez" required value="{{ $student->lastname }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="identification" class="form-label">Identificación*</label>
                            <input type="number" class="form-control" id="identification" name="identification" placeholder="Ej. 162345986" required value="{{ $student->identification }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ej. 320 456 89 87" value="{{ $student->phone }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="address" class="form-label">Dirección de residencia</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Ej. Calle 65 #118C 56" value="{{ $student->address }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="email" class="form-label">Correo Elctrónico*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ej. Fabian.rincon@gmail.com" required value="{{ $student->email }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Ej. 31/01/2000" required value="{{ $student->birthdate }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="birthdate" class="form-label">Genero*</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="male" @if($student->gender == 'male') selected @endif>Masculino</option>
                                <option value="female" @if($student->gender == 'female') selected @endif>Femenino</option>
                                <option value="other" @if($student->gender == 'other') selected @endif>Otro</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="program_id" class="form-label">Programa*</label>
                            <select name="program_id" id="program_id" class="form-select" required>
                                <option value="" selected>Seleccione...</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}" @if($program->id === $student->program_id) selected @endif>{{ $program->name }}</option>
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