<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIWAPAT</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-black">
    <x-navbar></x-navbar>
    <div class="flex flex-col items-center min-h-screen h-full p-5 mt-20 overflow-hidden">
        {{ $slot }}
    </div>
    <footer class="h-20 bg-gray-400"></footer>
</body>

</html>