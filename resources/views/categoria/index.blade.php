@extends('app')
@section('content')

<h4>Categorias</h4>

<div class="text-right">
	Total de registros: {!! $rows->count() !!}
</div>

<p>
	<a href="{{ route('categoria.create') }}" class="btn btn-sm btn-primary">novo</a>
</p>
@if($rows->count())
<div class="panel panel-primary">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rows as $row)
			<tr>
				<td>{!! $row->nome !!}</td>
				<td>
					<a href="{{ route('categoria.edit', [$row->id]) }}"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="{{ route('categoria.destroy', [$row->id]) }}"><span class="glyphicon glyphicon-trash"></span></a>
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
<p>Sem registros</p>
@endif

@endsection