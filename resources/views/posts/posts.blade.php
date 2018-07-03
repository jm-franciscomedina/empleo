@extends('layouts.layout')

@section('content')
    
    <section class=" gris aligera-2 mb-5 ml-5 mr-5" >
        <hr class="my-3">
        <!-- Heading -->
        <div class="card p-5 ">
            <h2 class="mt-3 font-weight-bold text-center">Ofertas de Empleos</h2>
            <hr class="my-2"> 

            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-6 mt-4">
                                <div class="card text-center cuadro">
                                    <div class="card-header cyan darken-2">
                                        <a href="entrada/{{$post->slug}}" class="btn-link titulo">
                                            <h4 class=" white-text">{{$post->title}}</h4>
                                        </a>
                                    </div>
                                    <div class="card-body text-justify">
                                        
                                        <p class="card-text text-justify texto">{{$post->excerpt}}</p>

                                        <li class="list-inline-item pr-2 text-black-50"><i class="fa fa-tags pr-1"></i>    
                                            @foreach($post->tags as $tag)
                                                <a href="etiqueta/{{ $tag->slug}}" class="text-black-50 ">#{{$tag->name}}</a>
                                            @endforeach
                                        </li>
                                        <br>
                                        <li class="list-inline-item pr-2 text-black-50"><i class="fa fa-tag pr-1"></i>
                                            <a href="categoria/{{$post->category->slug}}" class="text-black-50"> {{$post->category->name}}</a></li>
                                        <br>
                                        <li class="list-inline-item pr-2 text-black-50"><i class="fa fa-building" aria-hidden="true"></i>
                                            <span ><a href="" class="text-black-50">Empresa Global</a></span>
                                        </li>
                                    </div>
                                    <div class="card-footer text-muted cyan darken-2 white-text">
                                        <li class="list-inline-item pr-2 white-text"><i class="fas fa-calendar"></i>&nbsp;{{$post->published_at->format('M d')}}&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fas fa-clock"></i>&nbsp;{{$post->published_at->diffForHumans()}}
                                        </li>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-6 offset-md-3">   

                            <!--Pagination { $posts->render()}} falta una llave, lo coloque asi para no mostrarlo hasta que lo adaptes-->
                            <nav class="mt-5 paginacion ">
                                <ul class="pagination pagination-circle pg-cyan ">

                                    <!--First-->
                                    <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">Primero</a></li>

                                    <!--Arrow left-->
                                    <li class="page-item disabled">
                                        <a class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                    </li>

                                    <!--Numbers-->
                                    <li class="page-item active"><a class="page-link">1</a></li>
                                    <li class="page-item"><a class="page-link">2</a></li>
                                    <li class="page-item"><a class="page-link">3</a></li>
                                    <li class="page-item"><a class="page-link">4</a></li>
                                    <li class="page-item"><a class="page-link">5</a></li>

                                    <!--Arrow right-->
                                    <li class="page-item">
                                        <a class="page-link" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                    </li>

                                    <!--First-->
                                    <li class="page-item clearfix d-none d-md-block"><a class="page-link">Último</a></li>

                                </ul>
                            </nav>
                            <!--/Pagination -->
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        <hr class="my-3">
    </section>
@stop

