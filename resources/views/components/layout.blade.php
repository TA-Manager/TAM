<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAM</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tamLogo.svg') }}">
    <style>
    :root {
    font-family: Inter, sans-serif;
    font-feature-settings: 'liga' 1, 'calt' 1;
    }
    @supports (font-variation-settings: normal) {
        :root { font-family: InterVariable, sans-serif; }
    }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="flex flex-col min-h-screen h-full m-5 overflow-hidden relative">
        {{ $slot }}
    </div>
</body>

</html>