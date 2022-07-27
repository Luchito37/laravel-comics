@extends('layouts.app')

@section("page_title", $foundLibro["title"])

@section("page_content")
@include('jumbotron')

<div class="comics-poster bg-primary">
    <div class="container position-relative">
        <div>
            <img src="{{ $foundLibro['thumb'] }}" alt="{{ $foundLibro['title'] }}">
        </div>
    </div>
</div>
    <div class="container">
        <div class="row gap-3 align-items-center">
            <div class="col">
                <div>
                    <h1>{{$foundLibro["title"]}}</h1>
                </div>
                <div class="gree-bg text-white d-flex justify-content-between ">
                    <div class="p-3 border-bottom border-end border-secondary flex-grow-1 d-flex justify-content-between">
                        <div><span>U.S. Price : {{$foundLibro["price"]}}</span></div>
                        <div><span><strong>AVAILABLE</strong></span></div>
                    </div>
                    <div class="p-3 border-bottom border-end border-secondary">
                        <select class="gree-bg text-white border-0">
                            <option selected>Check Availability</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex">
                    <p>
                        {!!$foundLibro["description"]!!}
                    </p>
                </div>
            </div>
            <div class="col-3 d-flex ">
                <div class="d-flex flex-column">
                    <span class="text-secondary text-end">ADRVERTISEMENT</span>
                    <img  src="{{ asset('img/adv.jpg') }}" class="float-start" width="300" alt="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <h2>Talent</h2>
                </div>
                <hr>
                <div>
                    <div>Art by:</div>
                    <div><p>{{ implode (", " , $foundLibro["artists"])}}</p></div>
                </div>
                <hr>
                <div>
                    <div>Written by:</div>
                    <div><p>{{ implode (", " , $foundLibro["writers"])}}</p></div>
                </div>
                <hr>
            </div>
            <div class="col">
                <div>
                    <h2>Specs</h2>
                </div>
                <hr>
                <div>Series: {{$foundLibro["series"]}}</div>
                <hr>
                <div>U.S. Price: {{$foundLibro["price"]}}</div>
                <hr>
                <div>On Sale Date: {{$foundLibro["sale_date"]}}</div>
            </div>
        </div>
    </div>
@endsection