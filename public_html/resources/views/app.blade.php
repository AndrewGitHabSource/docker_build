<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite()

    <title>Application</title>

    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
</head>

<body class="body">
<meta name="csrf-token" content="{{csrf_token()}}">

<div id="app"></div>

</body>
</html>
