@extends('layouts.style')

@section('content')

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>bienvenido usuario: {{ Auth::user()->name }}</h4>
                </div>
@endsection
