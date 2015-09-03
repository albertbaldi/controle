{!! Form::hidden('despesa_id') !!}

<div class="form-group">
	{!! Form::label('data', 'Data') !!}
	{!! Form::text('data', old('data', Carbon\Carbon::today()->format('d/m/Y')), ['class'=>'form-control date', 'style'=>'width:120px;']) !!}
</div>
<div class="form-group">
	{!! Form::label('vencimento', 'Vencimento') !!}
	{!! Form::text('vencimento', old('vencimento', Carbon\Carbon::today()->format('d/m/Y')), ['class' => 'form-control date', 'style'=>'width:120px;']) !!}
</div>
<div class="form-group">
	{!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control', 'style'=>'width:200px;']) !!}
</div>
<div class="form-group">
	{!! Form::label('descricao', 'Descrição') !!}
	{!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('valor', 'Valor') !!}
	{!! Form::text('valor', null, ['class' => 'form-control money', 'style'=>'width:120px;']) !!}
</div>
<div class="form-group">
	{!! Form::label('parcelas', 'Parcelas') !!}
	{!! Form::text('parcelas', null, ['id' => 'parcelas','class' => 'form-control number3', 'style'=>'width:80px;']) !!}
</div>
{!! Form::text('parcela', null, ['id' => 'parcela']) !!}
<p class="text-right">
	<a href="{{ route('despesa.index') }}" class="btn btn-default">cancelar</a>
	{!! Form::submit('gravar', ['class' => 'btn btn-primary']) !!}
</p>
