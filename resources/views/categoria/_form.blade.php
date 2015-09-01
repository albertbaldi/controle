@extends('app')
@section('content')
{!! Form::open(['route' => 'categoria.store']) !!}

<div class="form-group">
	{!! Form::label('nome', 'Nome') !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('descricao', 'Descrição') !!}
	{!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>
<p class="text-right">
	<a href="{!! action('CategoriaController@index') !!}" class="btn btn-default">cancelar</a>
	{!! Form::submit('gravar', ['class' => 'btn btn-primary']) !!}
</p>

{!! Form::close() !!}
@endsection