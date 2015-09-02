@extends('app')

@section('content')

{!! Form::open(['route' => 'categoria.store']) !!}

@include('categoria._form')

{!! Form::close() !!}
@endsection