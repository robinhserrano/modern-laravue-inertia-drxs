<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>

        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
        <section class="p-8">
            @inertia
        </section>
    </body>
</html>