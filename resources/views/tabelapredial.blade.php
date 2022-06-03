@extends('layout-predial')

@section('content')
<br><br><br>
<div class="table-responsive-sm" style="margin-left:100px; margin-right:100px; ">
<table class="table table-bordered" style="border: solid ;border-collapse: collapse;border-spacing: 0px;">
<thead style="height: 50px; background-color:#F32F37;">
<tr>
<th scope="col">ID</th>
<th scope="col">Urgência</th>
<th scope="col">Setor</th>
<th scope="col">Local</th>
<th scope="col">Manutenção</th>
<th scope="col">Relatório</th>
<th scope="col">Data</th>
<th scope="col">Status</th>
</tr>
</thead>
<tbody>
@foreach($predial as $predials)
<tr>
<th scope="row">{{$predials->id}}</th>
<td>{{$predials->prioridade}}</td>
<td>{{$predials->setor}}</td>
<td>{{$predials->local}}</td>
<td>{{$predials->manutencao}}</td>
<td>{{$predials->description}}</td>
<td>{{$predials->created_at}}</td>
<td></td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection