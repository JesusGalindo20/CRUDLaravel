@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Create Representante
@endsection

@section('content_header')
    <h1>Representante</h1> 
@stop 

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Cadastro de Representante</span>
                        <div class="float-right">
                            <a class="btn btn-primary btn-md" href="{{ route('representantes.index') }}">Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('representantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('representante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
