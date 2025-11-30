<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rumah Sakit</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 min-h-screen bg-blue-700 text-white p-6">
        <h2 class="text-2xl font-bold mb-6">Rumah Sakit</h2>

        <nav>
            <ul class="space-y-3">
                <li><a href="/dashboard" class="block hover:text-yellow-300">Dashboard</a></li>
                <li><a href="/pasien" class="block hover:text-yellow-300">Pasien</a></li>
                <li><a href="/dokter" class="block hover:text-yellow-300">Dokter</a></li>
                <li><a href="/obat" class="block hover:text-yellow-300">Obat</a></li>
                <li><a href="/rawat-inap" class="block hover:text-yellow-300">Rawat Inap</a></li>
                <li><a href="/billing" class="block hover:text-yellow-300">Billing</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 p-8">
        <header class="mb-6 flex justify-between">
            <h1 class="text-3xl font-bold">@yield('title')</h1>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-600 text-white px-4 py-2 rounded-lg">Logout</button>
            </form>
        </header>

        @yield('content')
    </main>

</div>

</body>
</html>
