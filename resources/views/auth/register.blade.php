<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rumah Sakit</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md shadow-lg rounded-xl p-8 border border-gray-200">
        
        <h2 class="text-3xl font-bold text-center text-green-700 mb-6">
            Register Akun
        </h2>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama</label>
                <input 
                    type="text" 
                    name="name"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500"
                    placeholder="Masukkan nama"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input 
                    type="email"
                    name="email"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500"
                    placeholder="Masukkan email"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Password</label>
                <input 
                    type="password" 
                    name="password"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500"
                    placeholder="Password"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Konfirmasi Password</label>
                <input 
                    type="password"
                    name="password_confirmation"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500"
                    placeholder="Konfirmasi password"
                    required>
            </div>

            <button 
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition">
                Register
            </button>
        </form>

        <p class="text-center mt-4 text-sm">
            Sudah punya akun? 
            <a href="/login" class="text-green-600 font-semibold">Login</a>
        </p>

    </div>

</body>
</html>
