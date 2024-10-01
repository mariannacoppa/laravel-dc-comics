@extends('layouts.app')

@section('content')
<main>
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="badge p-3 bg-primary text-uppercase">
                            current series
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="comics-container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Laravel DC Comics</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="content d-flex justify-content-center">
                <p>Costruisco il database</p>
                <div class="btn btn-primary my-3 text-uppercase">load more</div>
            </div>
        </div>
    </div>
</main>
@endsection