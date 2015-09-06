@extends('app')

@section('content')

<h4>
	{!! $despesa->descricao !!}
	<br>
	<small>Parcelas</small>
</h4>

<div class="text-right">
	Total de registros: {!! $rows->count() !!}
</div>

@if($rows->count())
<div class="panel panel-primary">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Parcela</th>
				<th>Data</th>
				<th>Valor</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rows as $row)
			<tr>
				<td>{!! $row->parcela !!}</td>
				<td>{!! $row->data !!}</td>
				<td>{!! $row->valor !!}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="text-center">
	{!! $rows->render() !!}
</div>
@else
@include('utils.norecords')
@endif

@endsection