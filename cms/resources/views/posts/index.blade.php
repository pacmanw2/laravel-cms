@extends("layouts.posts-layout")
<link href="{{ asset('css/archives.css') }}" rel="stylesheet">

{{--@section("archives-content")--}}
@section("archives-content")
    <div class="content">
        <h2 class="text-center">Archives</h2>
        <form>
            <div class="form-group">
                <label for="catalogueSearch">Search</label>
                <input type="text" class="form-control" id="catalogueSearch"
                       aria-describedby="emailHelp" placeholder="search...">
                <small id="search-desc" class="form-text text-muted">
                    Search by post tag
                </small>
            </div>
            <button class="button btn-sm" type="submit"><span>Search </span></button>
        </form>


        <div class="row">
            <div class="col-md-4 mb-5">
                @foreach($posts as $post)
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{asset($post->file_name)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="/posts/{{$post->id}}">
                                <button class="btn btn-info btn-lg">View Post</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
