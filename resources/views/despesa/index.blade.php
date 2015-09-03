@extends('app')

@section('content')

<h4>Despesas</h4>

<div class="text-right">
	Total de registros: {!! $rows->count() !!}
</div>

<p>
	<a href="{{ route('despesa.create') }}" class="btn btn-sm btn-primary">novo</a>
</p>
@if($rows->count())
<div class="panel panel-primary">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Data</th>
				<th>Descrição</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rows as $row)
			<tr>
				<td>{!! $row->data !!}</td>
				<td>{!! $row->descricao !!}</td>
				<td>
					<a href="{{ route('despesa.edit', [$row->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="{{ route('despesa.destroy', [$row->id]) }}"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
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