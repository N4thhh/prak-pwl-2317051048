<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi Mahasiswa' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    @include('layouts._navbar')

    <main class="flex-grow container mx-auto mt-6 mb-6 p-4">
        @yield('content')
    </main>

    @include('layouts._footer')

</body>
</html>