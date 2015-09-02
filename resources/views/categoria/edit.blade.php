@extends('app')

@section('content')

{!! Form::model($row, ['route' => ['categoria.update', $row->id]]) !!}

@include('categoria._form')

{!! Form::close() !!}

@endsection