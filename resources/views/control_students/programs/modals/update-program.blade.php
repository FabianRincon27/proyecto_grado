<div class="modal fade bs-example-modal-sm" id='edit-program-{{ $program->id }}' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Actualizar programa <b>{{ $program->name }}</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('program.update', $program->id) }}" autocomplete="off" class="mb-0" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ej. Medicina" value="{{ $program->name }}">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" name="description" rows="6" style="resize: none;">{{ $program->description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Icono</label>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Ej. bx bx-plus-medical" value="{{ $program->icon }}">
                            <small>Puede escoger el icono en el siguiente enlace: <a href="https://boxicons.com/" target="_blank">Iconos</a></small>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Ej. bg-success" value="{{ $program->color }}">
                            <small>Los colores disponible son: <b>bg-success,bg-warning,bg-info,bg-primary,bg-dark</b></small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm mb-2" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light btn-sm mb-2 ms-2">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>