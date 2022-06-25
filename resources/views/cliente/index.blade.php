@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Cliente
@endsection

@section('content_header')
    <h1>Clientes</h1> 
@stop
 
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card-title">
                                {{ __('Registros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-md float-right"  data-placement="left">
                                  {{ __('Cadastrar') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    <!-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif -->

                    <!-- @if ($message = Session::get('success'))
                        <script>
                            swal("Great Job!", {button:"ok",});
                        </script>
                    @endif -->

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id= "opa" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nome</th>
										<th>Representante</th>
										<th>Email</th>
										<th>Cep</th>
										<th>Endereco</th>
										<th>Logradouro</th>
										<th>Numero</th>
										<th>Bairro</th>
										<th>Cidade</th>
										<th>Estado</th>
										<th>complemento</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->nome }}</td>
											<td>{{ $cliente->representante->nome }}</td>
											<td>{{ $cliente->email }}</td>
											<td>{{ $cliente->cep }}</td>
											<td>{{ $cliente->endereco }}</td>
											<td>{{ $cliente->logradouro }}</td>
											<td>{{ $cliente->numero }}</td>
											<td>{{ $cliente->bairro }}</td>
											<td>{{ $cliente->cidade }}</td>
											<td>{{ $cliente->estado }}</td>
											<td>{{ $cliente->complemento }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Tem certeza que deseja deletar este registro?')"><i class="fa fa-fw fa-trash"></i> Apagar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire('Concluido',
                    'Operação feita com sucesso.',
                    'success')
        </script>
    @endif
@endsection
