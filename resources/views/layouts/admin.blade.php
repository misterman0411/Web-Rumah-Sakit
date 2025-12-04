<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rumah Sakit') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-700 text-white flex flex-col flex-shrink-0 transition-all duration-300">
            <div class="p-6">
                <h1 class="text-2xl font-bold tracking-wider">Rumah Sakit</h1>
            </div>
            
            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-blue-800' : 'hover:bg-blue-600' }} transition">
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-600 transition">
                    <span class="font-medium">Pasien</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-600 transition">
                    <span class="font-medium">Dokter</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-600 transition">
                    <span class="font-medium">Obat</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-600 transition">
                    <span class="font-medium">Rawat Inap</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-600 transition">
                    <span class="font-medium">Billing</span>
                </a>
            </nav>

            <!-- User Profile / Logout -->
            <div class="p-4 border-t border-blue-600">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-blue-200">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm z-10">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        @yield('header')
                    </h2>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
