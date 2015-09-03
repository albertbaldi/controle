{!! Form::hidden('despesa_id') !!}

<div class="form-group">
	{!! Form::label('data', 'Data') !!}
	{!! Form::text('data', null, ['class' => 'form-control date']) !!}
</div>
<div class="form-group">
	{!! Form::label('vencimento', 'Vencimento') !!}
	{!! Form::text('vencimento', null, ['class' => 'form-control date']) !!}
</div>
<div class="form-group">
	{!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control', 'style'=>'width:200px;']) !!}
</div>
<div class="form-group">
	{!! Form::label('descricao', 'Descrição') !!}
	{!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>
<p class="text-right">
	<a href="{{ route('despesa.index') }}" class="btn btn-default">cancelar</a>
	{!! Form::submit('gravar', ['class' => 'btn btn-primary']) !!}
</p>
