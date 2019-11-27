@extends("archives-layout")
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
            <button class="button btn-lg" type="submit"><span>Search </span></button>
        </form>

        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/2019-11-02 15:43:00.svg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
{{--                <button class="button btn-lg" data-toggle="modal" data-target="#moreInfoModal">--}}
{{--                    More Info--}}
{{--                </button>--}}
{{--                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#moreInfoModal">--}}
{{--                    Open Modal--}}
{{--                </button>--}}
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#moreInfoModal">
                    Expand
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div id="moreInfoModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
{{--                        <img src="{{asset('img/2019-11-02 15:43:00.svg')}}" class="card-img-top" alt="...">--}}
                        <figure>
                            <embed type="image/svg+xml" src="{{asset('img/2019-11-02 15:43:00.svg')}}" />
                        </figure>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
