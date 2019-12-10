<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <link href="{{ asset('css/archives.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
    <div class="sidebar">
        <a href="/">Home</a>
        <a class="active" href="/posts">Posts</a>
        <a href="/archives/models">Models</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </div>
    @yield('archives-content')
</body>
