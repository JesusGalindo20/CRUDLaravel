<div class="box box-info padding-1">
    <div class="box-body">
    <!-- <form> -->
        <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('Nome completo') }}
            {{ Form::text('nome', $cliente->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('email') }}
            {{ Form::email('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ex. teste@gmail.com']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('representante') }}
            {{ Form::select('representante_id', $representantes, $cliente->representante_id, ['class' => 'form-control' . ($errors->has('representante_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('representante_id', '<div class="invalid-feedback">O campo representante é obrigatório.</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('CEP') }}
            {{ Form::text('cep', $cliente->cep, ['class' => 'form-control cep' . ($errors->has('cep') ? ' is-invalid' : ''), 'id'=>'cep', 'name'=>'cep','placeholder' => 'Digite só os numeros','minlength' => '9']) }}
            <div class="float-right">
                            <a class="btn btn-info btn-md" onclick="procurarcep()">Procurar CEP</a>
                        </div>
            <!-- <button class="btn btn-info btn-sm"  onclick="procurarcep()" style="min-width:100px;"> Pesquisar</button> -->
            {!! $errors->first('cep', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- tentativa -->
        <!-- <div class="input-group mb-3">
            {{ Form::label('') }}
            {{ Form::text('cep', $cliente->cep, ['class' => 'form-control cep' . ($errors->has('cep') ? ' is-invalid' : ''), 'id'=>'cep', 'name'=>'cep','placeholder' => 'Cep']) }}
            <button class="btn btn-danger btn-sm"  onclick="procurarcep()"> Pesquisar</button>
            {!! $errors->first('cep', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group col-md-6">
            {{ Form::label('endereco') }}
            {{ Form::text('endereco', $cliente->endereco, ['class' => 'form-control endereco' . ($errors->has('endereco') ? ' is-invalid' : ''), 'placeholder' => 'Ex. Rua primavera', 'disabled']) }}
            {!! $errors->first('endereco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('logradouro') }}
            {{ Form::text('logradouro', $cliente->logradouro, ['class' => 'form-control logradouro' . ($errors->has('logradouro') ? ' is-invalid' : ''), 'id'=>'logradouro', 'placeholder' => '', 'disabled']) }}
            {!! $errors->first('logradouro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-2">
            {{ Form::label('numero') }}
            {{ Form::number('numero', $cliente->numero, ['class' => 'form-control numero' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => '', 'disabled']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('bairro') }}
            {{ Form::text('bairro', $cliente->bairro, ['class' => 'form-control bairro' . ($errors->has('bairro') ? ' is-invalid' : ''), 'id'=>'bairro', 'name'=>'bairro', 'placeholder' => '', 'disabled']) }}
            {!! $errors->first('bairro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('cidade') }}
            {{ Form::text('cidade', $cliente->cidade, ['class' => 'form-control' . ($errors->has('cidade') ? ' is-invalid' : ''), 'id'=>'cidade', 'readonly', 'placeholder' => '']) }}
            {!! $errors->first('cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $cliente->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'readonly', 'id'=>'uf', 'placeholder' => '']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('complemento') }}
            {{ Form::text('complemento', $cliente->complemento, ['class' => 'form-control complemento' . ($errors->has('complemento') ? ' is-invalid' : ''), 'placeholder' => 'Ex. Portão cinza', 'disabled']) }}
            {!! $errors->first('complemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <center>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
    </div>
</center> 
</div>
<!-- </form> -->
@section('js')
<script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.cep').mask('00000-000');

    //  $(document).on('blur', '#cep', function(){
    //      const cep = $(this).val()
    //      $.ajax({
    //          url: 'https://viacep.com.br/ws/'+cep+'/json/',
    //          method: 'GET',
    //          dataType: 'json',
    //          success: function(data){
    //              if (data.erro){
    //                  alert('CEP não encontrado.');
    //              }
    //              $('#uf').val(data.uf);
    //              $('#cidade').val(data.localidade);
    //              $('#logradouro').val(data.logradouro);
    //              $('#bairro').val(data.bairro);

    //              var endereco = document.querySelector("#endereco");
    //              var logradouro = document.querySelector("#logradouro");
    //              var numero = document.querySelector("#numero");
    //              var bairro = document.querySelector("#bairro");
    //              var complemento = document.querySelector("#complemento");
    //              endereco.disabled = false;
    //              logradouro.disabled = false;
    //              numero.disabled = false;
    //              bairro.disabled = false;
    //              complemento.disabled = false;
             
    //  }});
    //  });

    
    function procurarcep(){
    
    var cep = document.getElementById("cep").value;
    var endereco = document.querySelector("#endereco");
    var logradouro = document.querySelector("#logradouro");
    var numero = document.querySelector("#numero");
    var bairro = document.querySelector("#bairro");
    var complemento = document.querySelector("#complemento");

    if(cep == "" || cep.length <= 8){
        Swal.fire('Campo CEP incompleto',
                    'Digite no minimo 8 caracteres no campo CEP',
                    'warning');
        // alert('Campo de CEP incompleto. Digite no minimo 8 caracteres.');
    }else{
    // window.alert(cep);

        $.ajax({
            url: 'https://viacep.com.br/ws/'+cep+'/json/',
            method: 'GET',
            dataType: 'json',
            success: function(data){
                if (data.erro){
                    Swal.fire('Campo CEP incorrecto',
                    'CEP não encontrado.',
                    'warning');
                    cep.focus();
                    // alert('CEP não encontrado.');
                }
                $('#uf').val(data.uf);
                $('#cidade').val(data.localidade);
                $('#logradouro').val(data.logradouro);
                $('#bairro').val(data.bairro);
                
                endereco.disabled = false;
                logradouro.disabled = false;
                numero.disabled = false;
                bairro.disabled = false;
                complemento.disabled = false;
            }

        });
    // });
}}





</script>
@endsection