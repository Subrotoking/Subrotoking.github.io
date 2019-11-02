@extends('master')

@section('isi')
{!! Form::open(['route' => 'user.store'])!!}
@include('user._user-form')
{!! Form::close() !!}
@stop