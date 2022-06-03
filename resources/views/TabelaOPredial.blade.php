@extends('layout-predial')

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
@foreach($opredial as $opredials)
<tr>
<th scope="row">{{$opredials->id}}</th>
<td>{{$opredials->setor}}</td>
<td>{{$opredials->local}}</td>
<td>{{$opredials->description}}</td>
<td>{{$opredials->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection