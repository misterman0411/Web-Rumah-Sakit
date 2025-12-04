<nav class="bg-white py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-gray-900 rounded-full flex items-center justify-center text-white font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
            <span class="font-bold text-xl tracking-tight">UPTEAMIST</span>
        </div>
        <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-900">Home</a>
            <a href="#" class="hover:text-gray-900">About</a>
            <a href="#" class="hover:text-gray-900">Department</a>
            <a href="#" class="hover:text-gray-900">Doctors</a>
            <a href="#" class="hover:text-gray-900">Pricing</a>
        </div>
        <div class="flex items-center gap-4">
            @auth
                <a href="{{ route('user.account') }}" class="flex items-center gap-2 hover:bg-gray-50 px-3 py-2 rounded-lg transition">
                    <div class="w-8 h-8 bg-gray-900 rounded-full flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-gray-900">Hello, {{ Auth::user()->name }}</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="p-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition" title="Logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-900">Sign In</a>
                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-gray-900 text-white text-sm font-medium hover:bg-gray-800 transition">Sign Up</a>
            @endauth
        </div>
    </div>
</nav>
