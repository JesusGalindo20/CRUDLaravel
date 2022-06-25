@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Create Cliente
@endsection

@section('content_header')
    <h1>Clientes</h1> 
@stop 

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Cadastro de Cliente</span>
                        <div class="float-right">
                            <a class="btn btn-primary btn-md" href="{{ route('clientes.index') }}">Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



