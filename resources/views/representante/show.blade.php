@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Representante
@endsection

@section('content_header')
    <h1>Representante</h1> 
@stop

<!-- @section('template_title')
    {{ $representante->name ?? 'Show Representante' }}
@endsection -->

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Dados do Representante</span>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary btn-md" href="{{ route('representantes.index') }}">Voltar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $representante->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $representante->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
