@extends('layouts.style')

@section('content')
    <div class="col-lg-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Crear Un Nuevo Post</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link">
                       	<i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" action="{{route('home.posts.store')}}">
                	{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}"><label class="col-lg-2 control-label">Titulo del Posts</label>
                     	<div class="col-lg-10"><input name="title" type="text" placeholder="Titulo del Posts" class="form-control" value="{{ old('title') }}" >
                        </div>
                        {!!$errors->first('title', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="from-group {{ $errors->has('excerpt') ? ' has-error' : '' }}">
                    	<label class="col-lg-2 control-label">extracto del Posts</label>
                    	<textarea {{ old('excerpt') }} name="excerpt" class="form-control" rows="6" placeholder="extracto del post"></textarea>
                    	 {!!$errors->first('excerpt', '<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                    	<label class="col-lg-2 control-label">contenido del Posts</label>
              			<div class="mb-6">
                			<textarea {{ old('body') }} name="body" rows="10" id="editor1" class="form-control" placeholder="Introduzca el texto del contenido del Post"
                          ></textarea>
                          {!!$errors->first('body', '<span class="help-block">:message</span>')!!}
              			</div>
            		</div>

            		<div class="form-group" id="data_1">
                        <label class="col-lg-2 control-label">Selecione una fecha</label>
                        <div class="input-group date">
                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="published_at" value="{{ old('published_at') }}"class="form-control" value="Seclecione una Fecha">
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                    	<label class="col-lg-2 control-label">Categorias</label>
                    	<select  name="category" class="form-control">
                    		<option value="">Seleccione una gategoria</option>
                    		@foreach($categories as $category)
                    			<option value="{{$category->id}}" 

                    				{{ old('category') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                    		@endforeach
                    	</select>
                    	{!!$errors->first('category', '<span class="help-block">:message</span>')!!}
                    </div>
                  	<div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
                		<label class="col-lg-2 control-label">Etiquetas</label>
                		<select  name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="seleccione una o mas etiquetas" style="width: 100%;">
                			@foreach($tags as $tag )
                			<option {{collect(old('tags'))->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
                			@endforeach
                		</select>
                		{!!$errors->first('tags', '<span class="help-block">:message</span>')!!}
                	</div>
                    <input type="hidden" name="users" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                     	<div class="col-lg-offset-2 col-lg-10">
                           <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                           <button class="btn btn-sm btn-danger" type="reset">Cancelar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">

@endpush
@push('script')
	<script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

    <script>
			CKEDITOR.replace( 'editor1' );

			 $(function () {
    			//Initialize Select2 Elements
   				 $(".select2").select2();
			 });

	</script>


 <script>
             $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });



</script>

    
@endpush