@extends("layouts.posts-layout")
{{--<link href="{{ asset('css/archives.css') }}" rel="stylesheet">--}}
@section("archives-content")
    <div class="content">
        <h1>Show Post</h1>
        <h2>{{$post->title}}</h2>
        <h2>{{$post->description}}</h2>
        <h2>{{$post->file_name}}</h2>
        <h2>Data</h2>
    </div>
@endsection
