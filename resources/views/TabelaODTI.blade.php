@extends('layout-dti')

@section('content')
<br><br><br>
<div class="table-responsive-sm" style="margin-left:100px; margin-right:100px; ">
<table class="table table-bordered" style="border: solid ;border-collapse: collapse;border-spacing: 0px;">
<thead style="height: 50px; background-color:#F32F37;">
<tr>
<th scope="col">ID</th>
<th scope="col">Setor</th>
<th scope="col">Local</th>
<th scope="col">Relatório</th>
<th scope="col">Data</th>
</tr>
</thead>
<tbody>
@foreach($odti as $odtis)
<tr>
<th scope="row">{{$odtis->id}}</th>
<td>{{$odtis->setor}}</td>
<td>{{$odtis->local}}</td>
<td>{{$odtis->description}}</td>
<td>{{$odtis->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection