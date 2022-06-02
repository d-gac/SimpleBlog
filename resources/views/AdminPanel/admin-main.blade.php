<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    @include('AdminPanel.import.import-head')
</head>
<body class="sb-nav-fixed">

@extends('AdminPanel.Layout.navbar')

<div id="layoutSidenav">

    @include('AdminPanel.Layout.menu')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('dashboard')
            </div>
        </main>
    @include('AdminPanel.Layout.footer')
    </div>
</div>
@include('AdminPanel.import.import-body')
</body>
</html>
