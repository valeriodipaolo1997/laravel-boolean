<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Drinks List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-info">

    <main>
        <h1 class="text-center">DRINKS LIST</h1>

        <div class="container py-5 d-flex flex-wrap justify-content-center gap-2">
            @foreach ($drinks as $drink)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $drink->thumb }}" class="card-img-top" alt="thumb">
                    <div class="card-body">
                        <h5 class="card-title">name: {{ $drink->name }}</h5>
                        <p class="card-text">instruction: {{ $drink->instruction }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">category: {{ $drink->category }}</li>
                        <li class="list-group-item">glass: {{ $drink->glass }}</li>
                        @if ($drink->isAlcoholic)
                            <li class="list-group-item">is alcolic</li>
                        @else
                            <li class="list-group-item">is not alcolic</li>
                        @endif
                        <li class="list-group-item">ingredients: {{ $drink->ingredients }}</li>
                        <li class="list-group-item">measures: {{ $drink->measures }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </main>

</body>

</html>



