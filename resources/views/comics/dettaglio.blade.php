@extends('layouts.app')

@section("page_title", $foundLibro["title"])

@section("page_content")
@include('jumbotron')

    <div class="bg-primary">

    </div>
    <div class="container">
        <div class="row gap-3">
            <div class="col-6">
                <div>
                    <h1>{{$foundLibro["title"]}}</h1>
                </div>
                <div class="bg-success d-flex justify-content-between">
                    <div class=" gap-3">
                        <div class="flex-grow-1 d-flex justify-content-between">
                            <span>U.S. Price: {{$foundLibro["price"]}}</span> 
                            <span><strong>AVAILABLE</strong></span>
                        </div>
                    </div>
                    <div>
                        <select class="bg-success" name="check" id="check-availability">
                            <option selected><strong>Check Availability</strong></option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex">
                    <p>
                        {!!$foundLibro["description"]!!}
                    </p>
                </div>
            </div>
            <div class="col d-flex ">
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