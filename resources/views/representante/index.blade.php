@extends('adminlte::page')

@section('title', 'CRUD')

@section('template_title')
    Representante
@endsection

@section('content_header')
    <h1>Representante</h1> 
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('representantes.create') }}" class="btn btn-primary btn-md float-right"  data-placement="left">
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

                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nome</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($representantes as $representante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $representante->nome }}</td>
											<td>{{ $representante->email }}</td>

                                            <td>
                                                <form action="{{ route('representantes.destroy',$representante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('representantes.show',$representante->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('representantes.edit',$representante->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar este registro?, Lembrando que todos os Clientes associados a este Representante, serão apagados automaticamente.')"><i class="fa fa-fw fa-trash"></i>Apagar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $representantes->links() !!}
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
