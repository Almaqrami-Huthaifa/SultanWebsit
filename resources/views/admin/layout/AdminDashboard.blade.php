@extends('admin.layout.master')
@section('content')



<h1>Hello {{Auth()->user()->name}}</h1>


@endsection