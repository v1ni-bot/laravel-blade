@extends('layout-user')

@section('content')    
<div class="px-2 py-2 my-2 text-center">
<h1 class="display-5 fw-bold">Manutenção DTI</h1>
</div>

<form method="POST" action="/ManuDTI">
@csrf
<select id="setor" name="setor"
style="margin-left:300px;background-color: rgba(74, 222, 255, 0.33);">
<option disabled selected>Selecione o Setor</option>
<option value="Administração">Administração</option>
<option value="Biblioteca">Biblioteca</option>
<option value="Anexo">Anexo</option>
<option value="Bloco_A">Bloco A</option>
<option value="Bloco_B">Bloco B</option>
<option value="Bloco_C">Bloco C</option>
<option value="Auditório">Auditório</option>
</select>
<br><br>
<select id="manutencao" name="manutencao"
style="margin-left:300px;background-color: rgba(74, 222, 255, 0.33);">
<option disabled selected>Tipo de Manutenção</option>
<option value="Tela">Tela</option>
<option value="Teclado">Teclado</option>
<option value="Mouse">Mouse</option>
<option value="Janelas">Janelas</option>
<option value="Projetor">Projetor</option>
<option value="TV">TV</option>
<option value="Computador">Computador</option>
</select>
<br><br>
<select id="prioridade" name="prioridade"
style="margin-left:300px;background-color: rgba(74, 222, 255, 0.33);">
<option disabled selected>Selecione a Prioridade</option>
<option value="Alta">Alta</option>
<option value="Média">Média</option>
<option value="Baixa">Baixa</option>
</select>
<br><br>
<div class="mb-3" height=200px style="margin-left:300px; margin-right:600px;">
<input type="text" class="form-control" id="local" name="local" placeholder="Informe local" maxlength='50'
style=" border-color: rgba(77, 77, 75, 0.459);background-color: rgba(74, 222, 255, 0.33);">
<br>
<label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
<textarea class="form-control" id="description" name="description" rows="3" maxlength='255'
style=" border-color: rgba(77, 77, 75, 0.459);background-color: rgba(74, 222, 255, 0.33);"></textarea>
</div>
<br>
<input id="submit" type="submit" value="Enviar"
style="margin-left:300px;background-color:rgba(224, 243, 7, 1);padding: 5px 20px;border-radius: 8px;">
</div>
</form>

@if ($status == 'success')
<br><br>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</symbol>
<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</symbol>
<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>

<div class="w-75 position-absolute top-80 start-50 translate-middle alert alert-success d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>
Solicitação efetuada com sucesso!
</div>
</div>
    @endif
@endsection