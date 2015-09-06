@extends('app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>{!! $row->descricao !!}</strong>
	</div>
	<div class="panel-body">
		<p>Data: {!! $row->data !!}</p>
		<p>Valor: R$ {!! number_format($row->items->sum('valor'), 2, ',','.') !!}</p>
		<hr>
		@if($row->items->count())
		<div class="panel panel-default">
			<div class="panel-heading">Parcelas</div>
			<div class="panel-body">
				
				<ul class="table-striped">
					@foreach ($row->items as $item)
					<li>
						{!! $item->parcela !!} - {!! $item->data !!} - {!! number_format(floatval($item->valor), 2, ',','.') !!}
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		
		@else
		@include('utils.norecords')
		@endif
	</div>
</div>

@endsection