<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>{{tenant() ? tenant()->tenant_name : 'Simple Blog'}} - @yield('title')</title>

    @include('AdminPanel.import.import-head')

</head>

<body class="sb-nav-fixed">

    @extends('AdminPanel.Layout.navbar')`

    <div id="layoutSidenav">

        @include('AdminPanel.Layout.menu')

        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4">

                    <h1 class="mt-4">@yield('title')</h1>

                    <ol class="breadcrumb mb-4">

                        <li class="breadcrumb-item active">@yield('subtitle')</li>

                    </ol>

                    @yield('dashboard')

                </div>

            </main>

            @include('AdminPanel.Layout.footer')

        </div>

    </div>

    @include('AdminPanel.import.import-body')

</body>

</html>
