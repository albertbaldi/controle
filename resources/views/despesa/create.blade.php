@extends('app')

@section('content')

{!! Form::open(['route' => 'despesa.store']) !!}

@include('despesa._form')

{!! Form::close() !!}
@endsection