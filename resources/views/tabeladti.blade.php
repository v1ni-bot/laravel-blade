@extends('layout-dti')

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
<th scope="col">Relatorio</th>
<th scope="col">Data</th>
<th scope="col">Status</th>
</tr>
</thead>
<tbody>
@foreach($dti as $dtis)
<tr>
<th scope="row">{{$dtis->id}}</th>
<td>{{$dtis->prioridade}}</td>
<td>{{$dtis->setor}}</td>
<td>{{$dtis->local}}</td>
<td>{{$dtis->manutencao}}</td>
<td>{{$dtis->description}}</td>
<td>{{$dtis->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection