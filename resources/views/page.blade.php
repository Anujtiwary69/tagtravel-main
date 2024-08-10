@extends('layouts.app')

@section('content')
  @include('page.default-slider',['slider'=>$uri])
  @include('layouts.booking')
  @include('page.'.$uri)
  
@endsection
