@extends('layouts.app')

@section('content')
    @include('layouts.main_slider')
    <div class="PageBooking">
        @include('layouts.booking')
    </div>
    @include('home.offers',['top'=>$top,'offers'=>$offers])
    @include('home.top',['top'=>$top])
    @include('home.holiday',['top'=>$top,'offers'=>$offers])
    @include('home.top_att',['top'=>$top,'top_att'=>$top_att])
    
    
    @include('home.mice',['top'=>$top,'offers'=>$offers])
    @include('home.des',['des'=>$des])
    @include('home.facts')
     @include('home.affilate')
    {{-- @include('home.awards') --}}
{{--    @include('home.live',['data'=>$data])--}}
@endsection
