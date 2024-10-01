@extends('layouts.app')
@section('content')
<main>
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="badge p-3 bg-primary text-uppercase">
                        current series
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="comics-container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2">
                <div class="comic">
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h4 class="text-uppercase">{{$comic['title']}}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12">
            <div class="content d-flex justify-content-center">

                <div class="btn btn-primary my-3 text-uppercase">load more</div>
            </div>
        </div>
    </div>
</main>
@endsection