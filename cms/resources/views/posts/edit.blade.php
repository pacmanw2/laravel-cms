@extends("layouts.posts-layout")
{{--<link href="{{ asset('css/archives.css') }}" rel="stylesheet">--}}

@section("archives-content")
    <div class="content">
        <h1>Edit Post</h1>

        <div class="form-group">
            <div class="field">
                <label for="postTitle" class="label">Title</label>
            </div>

            <input type="text" class="form-control" id="postTitle"
                   aria-describedby="titleHelp" value="{{$post->title}}">
            <small id="titleHelp" class="form-text text-muted">Free to edit as much as you'd like.</small>
        </div>
        <div class="form-group">
            <div class="field">
                <label for="descTextArea" class="label">Description</label>
            </div>
            <textarea class="form-control" id="descTextArea" rows="3">{{$post->description}}</textarea>
        </div>
        <button class="btn btn-info">Submit</button>
    </div>


@endsection

