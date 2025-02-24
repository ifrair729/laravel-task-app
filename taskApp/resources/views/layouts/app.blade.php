<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Task App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-black p-1 m-2">
    <nav class="bg-[#808080] p-4 text-white rounded-md">
        <!-- Navbar content -->
         <h1 class="text-xl font-bold p-2 text-center">My Task App</h1>
    </nav>
    <main class="inset-100 rounded-md shadow-white border bg-gradient-to-br from-white via transparent to-blue p-4 m-2">
        @yield('content')
    </main>
</body>
</html>