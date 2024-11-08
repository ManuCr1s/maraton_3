<!-- MultiStep Form -->
<div class="row">
    <div id="count_level" class="d-none">
                    <span class="badge badge-secondary badge-level" id="EV"></span>
                    <span class="badge badge-secondary badge-level" id="EM"></span>                          
                    <span class="badge badge-secondary badge-level" id="MM"></span>
                    <span class="badge badge-secondary badge-level" id="JU"></span>
                    <span class="badge badge-secondary badge-level" id="MEN"></span>
                    <span class="badge badge-primary badge-level" id="JUN"></span>
                    <span class="badge badge-secondary badge-level" id="IN"></span>
                    <span class="badge badge-secondary badge-level" id="HESM"></span>
                    <span class="badge badge-secondary badge-level" id="HECG"></span>
                    <span class="badge badge-secondary badge-level" id="SM"></span>
    </div>
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
                            <select  class="form-control form-step__control" id="level">
                                <option value="0" selected>SELECCIONE</option>
                                <option value="1">ELITE VARONES - 42,195KM</option>
                              <!--   <option value="2">ELITE MUJERES - 21KM</option> -->
                                <option value="11">SUPER MASTER - 5KM</option>
                                <option value="3">MASTER - 15KM</option>
                                <option value="4">JUVENILES - 12KM</option>
                                <option value="5">MENORES - 6KM</option>
                                <option value="6">JUNIOR - 2KM</option>
                                <option value="7">INFANTIL - 1KM</option>
                                <option value="8">HABILIDADES ESPECIALES SORDO Y MUDO - 5KM</option>
                                <option value="9">HABILIDADES ESPECIALES CON CEGUERA - 2KM</option>
                            </select>
                            <br>
                            <h6 class="form-step__label">SEXO</h6>
                            <select class="form-control form-step__control" id="gender">
                                <option value="0" selected>SELECCIONE</option>
                                <option value="M">MASCULINO</option>
                                <option value="F">FEMENINO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                                        <h6 class="d-flex justify-content-between mb-3 form-step__block"><span><b>CATEGORIAS</b></span><span><b>EDADES</b></span></h6>
                                <ul class="form-step__list">
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» ELITE VARONES MUJERES</b></span><span><b>Mayores de 18</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» SUPER MASTER</b></span><span><b>50 a más</b></span></small>        
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» MASTER</b></span><span><b>40 a 49</b></span></small>        
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUVENILES</b></span><span><b>15 - 16 - 17 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» MENORES</b></span><span><b>12 - 13 - 14 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» JUNIOR</b></span><span><b>10 - 11 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» INFANTIL</b></span><span><b>7 - 8 - 9 años</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
                                            <small class="text-muted d-flex justify-content-between"><span><b>» HABILIDADES ESPECIALES</b></span><span><b>Sordo y Mudo</b></span></small>          
                                        </li>
                                        <li class="text-muted my-sm-1 my-md-2">
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
                                <select id="country" class="form-control form-step__control">
                                </select>
                                <br>
                                <h6 class="form-step__label">TIPO DOCUMENTO</h6>
                                <select id="type" class="form-control form-step__control">
                                    <option selected value="0">SELECCIONE</option>
                                    <option value="D">DNI</option>
                                    <option value="C">CARNET DE EXTRANJERIA</option>
                                </select>
                                <br>
                                <h6 class="form-step__label">NUMERO DE DOCUMENTO</h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE NUMERO" id="number" minlength="8" maxlength="20">
                                <button type="submit" class="form-control action-button" id="seachdni">BUSCAR DNI</button>
                                
                        </div>
                        <div class="col-md-6 d-none" id="names">    
                                <div class="row d-flex justify-content-center">
                                    <i class="fa-solid fa-user-check form-step__icon"></i>
                                </div> 
                                <h6 class="form-step__label">NOMBRES</h6>
                                <input type="text" class="form-control form-step__control" id="name_person">
                                <br>
                                <h6 class="form-step__label">APELLIDOS </h6>
                                <input type="text" class="form-control form-step__control" id="lastname">
                                <br>
                                <h6 class="form-step__label">FECHA NACIMIENTO</h6>
                                <input type="date" class="form-control form-step__control" id="birthday">         
                        </div>
                    </div>
                <input type="button" name="previous" class="previous action-button-previous" value="ANTERIOR"/>
                <input type="button" name="next" class="next action-button d-none" id="step-2" value="SIGUIENTE"/>
            </fieldset>
            <fieldset fieldset class="form-step">
                <h2 class="form-step__title">LUGAR DE PROCEDENCIA</h2>
                <h3 class="form-step__subtitle">Seleccione su lugar de procedencia</h3>
                <div class="row text-left">
                        <div class="col-md-6" id="location">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-map-location-dot form-step__icon"></i>
                            </div>
                            
                            <h6 class="form-step__label">REGION</h6>
                            <select id="region" class="form-control form-step__control">
                            </select>
                            <br>
                            <h6 class="form-step__label">PROVINCIA</h6>
                            <select id="province" class="form-control form-step__control">
                            </select>
                            <br>
                            <h6 class="form-step__label">DISTRITO</h6>
                            <select id="district" class="form-control form-step__control">
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                                <h6 class="form-step__label">NUMERO CELULAR</h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE NUMERO CELULAR" id="phone">
                                <br>
                                <h6 class="form-step__label">DIRECCION </h6>
                                <input type="text" class="form-control form-step__control" placeholder="INGRESE DIRECCION" id="addresd">
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