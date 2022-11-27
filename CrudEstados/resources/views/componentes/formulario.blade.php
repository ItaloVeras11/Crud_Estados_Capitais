<fieldset>
<legend>Formulario</legend>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome</span>
        <input type="text" name="nome" value="{{ $cliente->nome ?? '' }}" class="form-control"
            placeholder="Nome Cliente" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Email</span>
        <input type="email" name="email" value="{{ $cliente->email ?? '' }}" class="form-control"
            placeholder="Email Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2">

    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" >Telefone</span>
        <input type="text" name="telefone" id="phone" value="{{ $cliente->telefone ?? '' }}" class="form-control"
            placeholder="Telefone" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>



    <div class="input-group mb-3">
        <span class="input-group-text">CPF</span>
        <input type="text" name="cpf" id="cpf" value="{{ $cliente->cpf ?? '' }}" class="form-control" placeholder="CPF"
            aria-label="Username">
        <span class="input-group-text">Data Nascimento</span>
        <input type="text" name="dtnasc" id="data" value="{{ $cliente->nascimento ?? '' }}" class="form-control"
            placeholder="DD/MM/AAAA" aria-label="Server">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Cidade</span>
        <input type="text" name="cidade" value="{{ $cliente->cidade ?? '' }}" class="form-control"
            placeholder="Cidade" aria-label="Username">
        <span class="input-group-text">Estado</span>
        <input type="text" name="estado" value="{{ $cliente->estado ?? '' }}" class="form-control"
            placeholder="Estado" aria-label="Server">
    </div>

    {{-- <div class="input-group mb-3">
        <span class="input-group-text">Estados</span>
        <select name="estado" id="estado" class="w-50">
            <option value="#">Estados</option>
            @foreach ($estados as $estado)
            <option value="{{ $estado->id }}">{{$estado->nome}}</option>
                
            @endforeach
        </select>
        <span class="input-group-text">Cidades</span>
        <select name="cidade" id="cidade" class="w-20">
            <option value="#">Cidades</option>
            
        </select>
    </div> --}}


    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
            <button id="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
            
            <a href="{{ route('welcome') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </div>



</fieldset>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


{{-- <script></script> --}}
<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#phone').mask('(00) 0000-0000');
        $('#data').mask('00/00/0000');
        })

        $('#estado').change(function(e) {
            let selectCidade = $('#cidade');
            let id = $('#estado').val();
            console.log(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('filter.city') }}",
                data: {
                    id
                },
                type: "post",
                dataType: "json",
                success: function(cidades) {
                    let cidadesOption = ''
                    cidadesOption += `<option value="">Selecione uma cidade...</option>`;
                    cidades.forEach(cidade => {
                        cidadesOption += `<option value="${cidade.id}">${cidade.nome}</option>`;
                        console.log(cidade.nome);
                    });
                    selectCidade.html(cidadesOption);
                }
            });
        });
</script>