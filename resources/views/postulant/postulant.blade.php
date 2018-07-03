@extends('layouts.layout')

@section('content')
    <hr class="my-3">
        <!--Formulario de Registro de postulantes -->
            <section class="container">
                 <div class="card p-5">
                     <!-- Material form register -->
                    <form>
                        <h3 class="h3 text-center mb-4">Registro de Postulante</h3>
                        <hr class="my-3">

                        <!-- Formulario para los datos de la empresa -->
                       <!-- Formulario para los datos de acceso -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                 <h4 class="h4 mb-5 mt-3">Datos de Acceso</h4>
                            </div>
                            <br>
                            <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="Black-text">Usuario</label>
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

                            <div class="col-md-4">
                                
                                <!-- Default input name -->
                                <label for="defaultFormCardNameEx" class="black-text">E-mail</label>
                                <input type="text" id="defaultFormCardNameEx" class="form-control">
                                
                            </div>
                        </div>

                        <hr class="my-3">

                        <button type="button" class="mt-3 btn btn-default float-right">Registrar Usuario</button>
                    </form>
                    <!-- Material form register -->
                </div>
            </section>
               
            <hr class="my-3">
        <!--Fin del Formulario de Registro de postulantes-->

@stop

