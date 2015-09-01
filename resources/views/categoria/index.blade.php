@extends('app')
@section('content')

<h4>Categorias</h4>

<div class="text-right">
	Total de registros: {!! $rows->count() !!}
</div>

<a href="{{ action('CategoriaController@create') }}" class="btn btn-sm btn-primary">novo</a>

@if($rows->count())
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
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>

@else
<p>Sem registros</p>
@endif

@endsection