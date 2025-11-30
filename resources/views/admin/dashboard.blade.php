<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white shadow-md p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold text-blue-600">Rumah Sakit Admin</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-red-500">Logout</button>
                </form>
            </div>
        </nav>

        <main class="flex-grow container mx-auto p-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Welcome, Admin!</h2>
                <p class="text-gray-700">You have access to the administrative functions.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-blue-50 p-4 rounded border border-blue-100">
                        <h3 class="font-bold text-blue-700">Manage Users</h3>
                        <p class="text-sm text-blue-600 mt-1">View and edit user accounts.</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded border border-green-100">
                        <h3 class="font-bold text-green-700">System Logs</h3>
                        <p class="text-sm text-green-600 mt-1">Check system activities.</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded border border-purple-100">
                        <h3 class="font-bold text-purple-700">Settings</h3>
                        <p class="text-sm text-purple-600 mt-1">Configure application settings.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
