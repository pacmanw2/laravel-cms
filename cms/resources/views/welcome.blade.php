@extends('layout')
<link href="{{ asset('css/home-page.css') }}" rel="stylesheet">

@section('home-navigation')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('header')
{{--    <header class="jumbotron py-5 mb-5">--}}
{{--        <div class="container h-100">--}}
{{--            <div class="row h-100 align-items-center">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h1 class="display-4 text-black mt-5 mb-2">Punk API Web Interface</h1>--}}
{{--                    <p class="lead mb-5 text-black-50">--}}
{{--                        A lightweight tool to browse and learn more about Brewdog's beer.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}
<header class="jumbotron py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-black mt-5 mb-2">T1 Diabetes Stats</h1>
                <p class="lead mb-5 text-black-50">
                    A lightweight tool to browse my catalogue of blood sugars and related stats.
                </p>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Purpose</h2>
                <hr>
                <p>
                    This is an online journal where I will be uploading graphs of my blood sugars
                    and also any other stats that I find interesting or am able to produce about
                    my type 1 diabetes. The data originates from my FreeStyle Libre 14 Day CGM.
                </p>
                <a href="/posts" class="btn btn-primary btn-lg" role="button">
                    Archives
                </a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Search my website</h2>
                <!-- Search form -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

{{--        product row columns--}}
        <h2>Latest Data</h2>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
@endsection
