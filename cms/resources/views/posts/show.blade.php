@extends("layouts.posts-layout")
{{--<link href="{{ asset('css/archives.css') }}" rel="stylesheet">--}}
<script src="{{ asset('js/bloodGlucose.js') }}"></script>
@section("archives-content")
    <div class="content">
        <h1>Show Post</h1>
        <h2>{{$post->title}}</h2>
        <h2>{{$post->description}}</h2>
        <h2>{{$post->file_name}}</h2>
        <h2>Data</h2>

        <canvas id="myChart">
            <script>

                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'My First dataset',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 10, 5, 2, 20, 30, 45]
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            </script>
        </canvas>
    </div>
@endsection
