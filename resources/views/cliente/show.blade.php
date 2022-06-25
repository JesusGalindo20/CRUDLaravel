@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Cliente
@endsection

@section('content_header')
    <h1>Clientes</h1> 
@stop

<!-- @section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection --> 

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Dados do Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-md" href="{{ route('clientes.index') }}">Voltar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $cliente->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Representante:</strong>
                            {{ $cliente->representante->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Cep:</strong>
                            {{ $cliente->cep }}
                        </div>
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            {{ $cliente->endereco }}
                        </div>
                        <div class="form-group">
                            <strong>Logradouro:</strong>
                            {{ $cliente->logradouro }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $cliente->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Bairro:</strong>
                            {{ $cliente->bairro }}
                        </div>
                        <div class="form-group">
                            <strong>Cidade:</strong>
                            {{ $cliente->cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cliente->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Complemento:</strong>
                            {{ $cliente->complemento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
