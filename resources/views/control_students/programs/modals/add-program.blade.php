<div class="modal fade bs-example-modal-sm" id='add-program' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Crear programa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('program.create') }}" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ej. Medicina">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea class="form-control" name="description" rows="6" style="resize: none;"></textarea>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Icono</label>
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Ej. bx bx-plus-medical">
                            <small>Puede escoger el icono en el siguiente enlace: <a href="https://boxicons.com/" target="_blank">Iconos</a></small>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="description" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Ej. bg-success">
                            <small>Los colores disponible son: <b>bg-success,bg-warning,bg-info,bg-primary,bg-dark</b></small>
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