@extends('layouts.app')


@section('page_title','Comics DC')
    
@section('page_content')
@include('jumbotron')
    @include('comics.libri')
    <div class=" bg-blue">
        @include('bannerBlue')
    </div>
    
@endsection
