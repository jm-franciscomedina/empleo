@extends('layouts.layout')

@section('content')
  <hr class="my-3">
        <!--Formulario de Registro de Empresas -->
            <section class="container">
                 <div class="card p-5">
                     <!-- Material form register -->
                    <form >
                        <h3 class="h3 text-center mb-4">Registro de Empresa</h3>
                        <hr class="my-3">

                        <!-- Formulario para los datos de la empresa -->
                        <div class="row">
                            <div class="col-md-12">
                                 <h4 class="h4  mb-5 mt-3">Datos de la empresa</h4>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Nombre de la Empresa</label>
                                <input name="name_company" type="text" id="defaultFormCardNameEx" class="form-control" required="Este Campo es Obligatorio" title="Nombre de la Empresa" placeholder="Nombre de la Empresa" maxlength="100" minlength="5"> 
                            </div>
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Razón Social</label>
                                <input name="business_name" type="text" id="defaultFormCardNameEx" class="form-control" placeholder="Razón Social" title="Razón Social" required="Este Campo es Requerido" maxlength="100" minlength="5">
                            </div>
                            <div class="col-md-4">
                                   
                                <label for="defaultFormCardNameEx" class="Black-text">RIF o RUT de la Empresa</label>
                                <input name="rif" required="Este Campo es Requerido" placeholder="RIF o RUT de la Empresa" type="text" id="defaultFormCardNameEx" class="form-control" title="RIF o RUT de la Empresa" maxlength="100" minlength="5">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4"> 
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Dirección Fiscal</label>
                                <input  name="direction" placeholder="Dirección Fiscal" title="Dirección Fiscal" type="text" id="defaultFormCardNameEx" class="form-control" maxlength="100" minlength="5" required="Este Campo es Requerido">  
                            </div>

                            <div class="col-md-4">
                                <label for="defaultFormCardNameEx" class="Black-text">Tipo de Industria</label>
                                <select  name="type_of_company" required="Este Campo es Requerido" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected >Seleccione...</option>
                                    <option value="sociedad anónima S.A">Sociedad Anónima S.A</option>
                                    <option value="sociedad anónima cerrada S.A.C.">Sociedad Anónima Cerrada S.A.C.</option>
                                    <option value="empresa unipersonal">Empresa Unipersonal</option>
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="black-text">Sitio Web (Opcional)</label>
                                <input name="site" maxlength="50" minlength="8" type="url" id="defaultFormCardNameEx" class="form-control" placeholder="http://www.site.com">
                                
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                
                                    <label for="defaultFormCardNameEx" class="Black-text">Tipo de Propiedad</label>
                                    <select name="kind_of_property" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Seleccione...</option>
                                        <option value="publica">Publica</option>
                                        <option value="gobierno">Gobierno</option>
                                        <option value="mixta">Mixta</option>
                                    </select>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">Nro. de Empelados</label>
                                <select name="workers_nuns" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Seleccione...</option>
                                    <option value="10">10</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="mas de 50">Mas de 50</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">País</label>
                                <select name="country" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected value="peru">Peru</option>
                                    <option disabled="" value="chile">Chile</option>
                                    <option disabled="" value="Ecuador">Ecuador</option>
                                    <option disabled="" value="Bolivia">Bolivia</option>
                                    <option disabled="" value="Venezuela">Venezuela</option>
                                    <option disabled="" value="Uruguay">Uruguay</option>

                                </select>
                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                
                                    <label for="defaultFormCardNameEx" class="Black-text">Provincia/Estado/Departamento</label>
                                    <select name="region" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Seleccione...</option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">Ciudad</label>
                                <select name="city" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">Código Postal</label>
                                <input name="postal_code" required="este campo es requerido" title="Codigo Postal" placeholder="Codigo Postal" maxlength="20" minlength="4" type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                        </div>
                        <!--Fin del Formulario para los datos de la empresa -->

                        <hr class="my-3">

                        <!-- Formulario para los datos de acceso -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                 <h4 class="h4 mb-5 mt-3">Datos de Acceso</h4>
                            </div>
                            <br>
                            <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Nombre de Usuario</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">Clave</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                            <div class="col-md-4">
                                
                                <label for="defaultFormCardNameEx" class="Black-text">Repetir Clave</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                            
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="black-text">Pregunta de Seguridad</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>

                             <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="black-text">Respuesta de Seguridad</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                        </div>
                        
                        <hr class="my-3">

                        <div class="row mt-3">

                            <div class="col-md-12">
                                 <h4 class="h4  mb-4">Datos del Usuario Encargado</h4>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Nombre</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Apellido</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                            <div class="col-md-4">
                                   
                                <label for="defaultFormCardNameEx" class="Black-text">Cargo</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">E-mail</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Teléfono Fijo</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                            <div class="col-md-4">
                                   
                                <label for="defaultFormCardNameEx" class="Black-text">Teléfono Celular</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                            </div>
                        </div>

                        <hr class="my-3">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox100" checked="checked">
                            <label class="form-check-label" for="checkbox100">Acepto los Términos y Condiciones legales del sitio web</label>
                        </div>
                        <a href="#">Leer Terminos y Condiciones</a>

                        <button type="submit" class="mt-3 btn btn-default float-right">Registrar Empresa</button>
                    </form>
                    <!-- Material form register -->
                </div>
            </section>
               
            <hr class="my-3">
        <!--Fin del Formulario de Registro de Empresas-->

@stop

