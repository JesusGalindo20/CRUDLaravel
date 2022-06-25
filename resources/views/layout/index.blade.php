@extends('adminlte::page')

@section('content_header')
    <h1>Bem-vindo</h1>
@stop

@section('content')
    <p>O projeto presente tem como fin apresentar um pouco de meu conhecimento, <br>para assim conquistar minha primeira vaga de programador.</p><br>

<div class="row"> 


<div class="col-md-6 col-sm-6 col-12">
<div class="info-box">
<a href="/representantes" class="info-box-icon bg-info"><i class="far fa-fw fa-user"></i></a>
<div class="info-box-content">
<a href="/representantes" class="small-box-footer"><h3 class="info-box-text">Representantes</h3></a>
<p class="info-box-text">Aqui você poderá gerenciar seus representantes.</p>
</div>

</div>


</div>

<div class="col-md-6 col-sm-6 col-12">
<div class="info-box">
<a href="/clientes" class="info-box-icon bg-success"><i class="far fa-solid fa-address-book"></i></a>
<div class="info-box-content">
<a href="/clientes" class="small-box-footer"><h3 class="info-box-text">Clientes</h3></a>
<p class="info-box-text">Aqui você poderá gerenciar seus clientes.</p>
</div>

</div>

</div>


</div>
@stop


