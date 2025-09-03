
<!--         <div class="col-4">
                <h6 class="text-title-total col-12"><center>TOTAL DE INSCRITOS A LA MARATON </center></h6>
                <span class="text-title-number col-12 d-flex justify-content-center" id="total_maraton"></span>
        </div>
        <a type="button" class="col-4 button button--orange" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fa-solid fa-print icon"></i>VERIFICA TU INSCRIPCION
        </a> -->


<div class="modal fade" id="modalVerification" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                                
                                <h5 class="modal-title" id="staticBackdropLabel">VERIFICA TU INSCRIPCION</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form id="form_dni">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="date_dni">Ingrese su Numero DNI</label>
                                        <input type="text" class="form-control" id="date_dni" placeholder="Ingrese DNI" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger mr-3" data-dismiss="modal">CERRAR FORMULARIO</button>
                                    <button type="submit" class="btn btn-sm btn-warning">CONSULTAR INSCRIPCION</button>
                                </div>
                        </form>
                </div>
        </div>
</div>
