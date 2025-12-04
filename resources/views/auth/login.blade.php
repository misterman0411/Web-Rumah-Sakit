@extends('layouts.auth')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl w-full flex flex-col md:flex-row min-h-[600px]">
        
        <!-- Left Side - Blue Background with Illustration -->
        <div class="w-full md:w-1/2 bg-blue-600 p-12 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-blue-600 font-bold">U</div>
                    <span class="font-bold text-xl">Upteamist</span>
                </div>
                
                <!-- Illustration Placeholder -->
                <div class="my-12 flex justify-center">
                    <div class="w-64 h-64 bg-blue-500 rounded-full flex items-center justify-center opacity-80">
                         <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold mb-2">Welcome!</h2>
                    <p class="text-blue-100">Get a real intranet on top of your Office 365 environment, with Upteamist.</p>
                    <div class="flex gap-2 mt-4">
                        <div class="w-2 h-2 rounded-full bg-white"></div>
                        <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                        <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Circles -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-blue-500 opacity-20"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 rounded-full bg-blue-500 opacity-20"></div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Log In</h2>
                <p class="text-gray-500 mb-8 text-sm">
                    Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:underline">Create an account</a>
                    <br>It will take less than a minute.
                </p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email / Username</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-blue-600 focus:outline-none transition bg-transparent placeholder-gray-400"
                                placeholder="Enter your email">
                            <div class="absolute right-0 top-3 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                class="w-full px-4 py-3 border-b border-gray-300 focus:border-blue-600 focus:outline-none transition bg-transparent placeholder-gray-400"
                                placeholder="Enter your password">
                            <div class="absolute right-0 top-3 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mb-8">
                        <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                            Sign in
                        </button>
                        
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-500">Remember password</label>
                        </div>
                    </div>

                    <div class="text-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forget your password?</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
