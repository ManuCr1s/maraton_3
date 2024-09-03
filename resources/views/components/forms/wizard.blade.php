<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-12 col-md-offset-3 mt-5">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Seleccione Categoria</li>
                <li>Datos Personales</li>
                <li>Lugar de Procedencia</li>
            </ul>
            <!-- fieldsets -->
            <fieldset class="form-step">
                <h2 class="form-step__title">CATEGORIAS DISPONIBLES</h2>
                <h3 class="form-step__subtitle">Por favor elija la categoria en que desea participar</h3>
                <div class="row text-left">
                        <div class="col-md-6">
                            <div class="row d-flex justify-content-center">
                                <i class="fa-solid fa-ranking-star form-step__icon"></i>
                            </div>
                            <h6 class="form-step__label">CATEGORIA</h6>
                            <select  class="form-control form-step__control">
                                <option selected>SELECCIONE</option>
                                <option value="">ELITE VARONES</option>
                                <option value="">ELITE MUJERES</option>
                                <option value="">MASTER</option>
                                <option value="">JUVENILES</option>
                                <option value="">MENORES</option>
                                <option value="">JUNIOR</option>
                                <option value="">INFANTIL</option>
                                <option value="">HABILIDADES ESPECIALES SORDO Y MUDO</option>
                                <option value="">HABILIDADES ESPECIALES CON CEGUERA</option>
                            </select>
                            <br>
                            <h6 class="form-step__label">SEXO</h6>
                            <select id="inputState" class="form-control form-step__control">
                                <option selected>SELECCIONE</option>
                                <option value="">MASCULINO</option>
                                <option value="">FEMENINO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                                        <h6 class="d-flex justify-content-between mb-3 form-step__block"><span><b>CATEGORIAS</b></span><span><b>EDADES</b></span></h6>
                                <ul class="form-step__list">
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» ELITE VARONES MUJERES</b></span><span><b>Mayores de 18</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between mb-2"><span><b>» MASTER</b></span><span><b>40 a más</b></span></small>        
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUVENILES</b></span><span><b>15 - 16 - 17 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» MENORES</b></span><span><b>12 - 13 - 14 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUNIOR</b></span><span><b>10 - 11 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» INFANTIL</b></span><span><b>7 - 8 - 9 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» HABILIDADES ESPECIALES</b></span><span><b>Sordo y Mudo</b></span></small>          
                                        </li>
                                        <li class="text-muted my-3">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» HABILIDADES ESPECIALES</b></span><span><b>Visual</b></span></small>          
                                        </li>
                                </ul>
                        </div>
                </div>
                <input type="button" name="next" class="next action-button" value="SIGUIENTE"/>
            </fieldset>
            <fieldset fieldset class="form-step">
                <h2 class="form-step__title">DATOS PERSONALES</h2>
                <h3 class="form-step__subtitle">Ingrese sus datos personales</h3>
                <div class="row text-left">
                        <div class="col-md-6">
                            <div class="row d-flex justify-content-center">
                                <i class="fa-solid fa-children form-step__icon"></i>
                            </div>
                                <h6 class="form-step__label">PAIS</h6>
                                <select id="inputState" class="form-control form-step__control">
                                    <option selected>SELECCIONE</option>
                                </select>
                                <br>
                                <h6 class="form-step__label">TIPO DOCUMENTO</h6>
                                <select id="inputState" class="form-control form-step__control">
                                    <option selected>SELECCIONE</option>
                                    <option value="">MASCULINO</option>
                                    <option value="">FEMENINO</option>
                                </select>
                                <br>
                                <h6 class="form-step__label">NUMERO DE DOCUMENTO</h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE SU NUMERO DE DOCUMENTO">
                        </div>
                        <div class="form-group col-md-6">    
                                <div class="row d-flex justify-content-center">
                                    <i class="fa-solid fa-user-check form-step__icon"></i>
                                </div> 
                                <h6 class="form-step__label">NOMBRES</h6>
                                <input type="text" class="form-control form-step__control">
                                <br>
                                <h6 class="form-step__label">APELLIDOS </h6>
                                <input type="text" class="form-control form-step__control">
                                <br>
                                <h6 class="form-step__label">FECHA NACIMIENTO</h6>
                                <input type="date" class="form-control form-step__control" placeholder="INGRESE NUMERO DE TELEFONO">         
                        </div>
                    </div>
                <input type="button" name="previous" class="previous action-button-previous" value="ANTERIOR"/>
                <input type="button" name="next" class="next action-button" value="SIGUIENTE"/>
            </fieldset>
            <fieldset fieldset class="form-step">
                <h2 class="form-step__title">LUGAR DE PROCEDENCIA</h2>
                <h3 class="form-step__subtitle">Seleccione su lugar de procedencia</h3>
                <div class="row text-left">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-map-location-dot form-step__icon"></i>
                            </div>
                            
                            <h6 class="form-step__label">REGION</h6>
                            <select id="inputState" class="form-control form-step__control">
                                <option selected>SELECCIONE</option>
                            </select>
                            <br>
                            <h6 class="form-step__label">PROVINCIA</h6>
                            <select id="inputState" class="form-control form-step__control">
                                <option selected>SELECCIONE</option>
                                <option value="">MASCULINO</option>
                                <option value="">FEMENINO</option>
                            </select>
                            <br>
                            <h6 class="form-step__label">DISTRITO</h6>
                            <select id="inputState" class="form-control form-step__control">
                                <option selected>SELECCIONE</option>
                                <option value="">MASCULINO</option>
                                <option value="">FEMENINO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                                <h6 class="form-step__label">NUMERO CELULAR</h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE NUMERO CELULAR">
                                <br>
                                <h6 class="form-step__label">DIRECCION </h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE DIRECCION">
                                <br>
                        </div>
                    </div>
                <input type="button" name="previous" class="previous action-button-previous" value="ANTERIOR"/>
                <input type="submit" name="submit" class="submit action-button" value="ENVIAR"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->