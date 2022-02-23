<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}} - @yield('title','')</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="row" data-render="content">
            @yield('content')
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/admin.js') }}"></script>
@stack('scripts')
{{--@include('admin.helpers.modal')--}}
</body>
</html>
