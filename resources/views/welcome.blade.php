<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel dengan Tailwind CSS</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-blue-300">
    @include('layout.navbar')
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-600">Hello, Laravel + Tailwind CSS!</h1>
            <p class="text-gray-700 mt-4">Selamat datang di proyek Laravel dengan Tailwinds.</p>
        </div>
    </div>
    
</body>
</html>
