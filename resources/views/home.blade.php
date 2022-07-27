@extends('layouts.app')


@section('page_title','Comics DC')
    
@section('page_content')
@include('jumbotron')
    @include('libri')
    <div class="banner bg-blue">
        @include('bannerBlue')
    </div>
    
@endsection
