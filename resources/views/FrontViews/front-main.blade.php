<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>{{tenant() ? tenant()->tenant_name : 'Simple Blog'}} - @yield('title')</title>

    @include('FrontViews.import.import-head')

</head>

<body class="antialiased">

    @include('FrontViews.Layout.menu')

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">

        <div class="row gx-4 gx-lg-5 justify-content-center">

            <div class="col-md-10 col-lg-8 col-xl-10">

                @yield('content')

            </div>

        </div>

    </div>

    @include('FrontViews.Layout.footer')

    @include('FrontViews.import.import-body')

</body>

</html>
