<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<!-- Navigation -->
@yield('home-navigation')

<!-- Header -->
@yield('header')
{{--<header class="bg-primary py-5 mb-5">--}}
{{--    <div class="container h-100">--}}
{{--        <div class="row h-100 align-items-center">--}}
{{--            <div class="col-lg-12">--}}
{{--                <h1 class="display-4 text-white mt-5 mb-2">Punk API</h1>--}}
{{--                <p class="lead mb-5 text-white-50">--}}
{{--                    A lightweight tool to browse and learn more about Brewdog's beer.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<!-- Page Content -->
@yield('content')
{{--@yield('about')--}}
{{--@yield('archives-content')--}}
<!-- /.container -->

<!-- Footer -->
{{--<footer class="py-5 bg-dark fixed-bottom">--}}
{{--    <div class="container">--}}
{{--        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>--}}
{{--    </div>--}}
{{--    <!-- /.container -->--}}
{{--</footer>--}}


</body>

</html>
