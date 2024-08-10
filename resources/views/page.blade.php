@extends('layouts.app')

@section('content')
@php
    $mainPoint = config('app.env') === 'production' ? '/public/' : '/';
@endphp
  @include('page.default-slider',['slider'=>$uri,'mainPoint'=>$mainPoint])
  @include('layouts.booking')
  @include('page.'.$uri)
  
@endsection
