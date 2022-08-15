<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite

    @production
        @php
            $manifest = json_decode(file_get_contents(
                public_path('build/manifest.json')
            ));
        @endphp
        <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
        <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}" />
    @endproduction

    <title>Application</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
</head>

<body class="body">
<meta name="csrf-token" content="{{csrf_token()}}">

<div id="app"></div>

</body>
</html>
