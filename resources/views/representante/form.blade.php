<div class="box box-info padding-1">
    <div class="box-body"> 
        
        <div class="form-group">
            {{ Form::label('Nome completo') }}
            {{ Form::text('nome', $representante->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $representante->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ex. teste@gmail.com']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <center>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
    </div>
</center>
</div>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection