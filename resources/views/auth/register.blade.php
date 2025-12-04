@extends('layouts.auth')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-6xl w-full flex flex-col md:flex-row min-h-[700px]">
        
        <!-- Left Side - Doctor Image & Branding -->
        <div class="w-full md:w-5/12 bg-blue-600 relative overflow-hidden flex flex-col justify-end p-8 text-white">
            <!-- Background Elements -->
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-blue-400 to-blue-700 opacity-90"></div>
            <div class="absolute top-10 left-10 w-20 h-20 bg-blue-300 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-300 rounded-full opacity-20"></div>
            
            <!-- Content -->
            <div class="relative z-10 text-center md:text-left">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold mb-2">Medic</h2>
                    <p class="text-blue-100 text-sm">Let's protect yourself and those around you by vaccinating.</p>
                </div>
                
                <!-- Doctor Image Placeholder -->
                <div class="relative mx-auto md:mx-0 w-64 h-80 bg-blue-800 rounded-t-full overflow-hidden border-4 border-blue-300/30">
                     <div class="absolute inset-0 flex items-center justify-center text-blue-300">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                     </div>
                </div>
                
                <!-- Stats Badge -->
                <div class="absolute bottom-32 left-8 bg-white text-blue-900 px-4 py-2 rounded-lg shadow-lg flex items-center gap-2 text-xs font-bold">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    5.7 Million doses injected
                </div>
                
                <div class="absolute bottom-10 right-8 bg-white text-green-600 px-4 py-2 rounded-lg shadow-lg flex items-center gap-2 text-xs font-bold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    98% recovery rate
                </div>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="w-full md:w-7/12 p-8 md:p-12 bg-white overflow-y-auto">
            <div class="max-w-lg mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Register</h2>
                    <a href="{{ route('login') }}" class="text-sm text-blue-600 font-medium hover:underline">Check your status</a>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Registering For -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">I am registering for</label>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="register_for" value="self" checked class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">My self</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="register_for" value="other" class="text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-600">Other people</span>
                            </label>
                        </div>
                    </div>

                    <!-- Full Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Patient's Full Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition"
                            placeholder="Full name">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email (Required for Auth) -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition"
                            placeholder="email@example.com">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile Number -->
                    <div class="mb-6">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                        <div class="flex">
                            <div class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100">
                                🇮🇩 +62
                            </div>
                            <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="81234567890">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Notifications for appointment and reminders will be sent to this number.</p>
                        @error('phone_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Patient ID Number -->
                    <div class="mb-6">
                        <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">Patient ID Number</label>
                        <div class="flex gap-4">
                            <select class="w-1/3 px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:outline-none text-sm text-gray-600">
                                <option>ID Type</option>
                                <option value="ktp">KTP</option>
                                <option value="sim">SIM</option>
                            </select>
                            <input id="nik" type="text" name="nik" value="{{ old('nik') }}"
                                class="w-2/3 px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition"
                                placeholder="ID number">
                        </div>
                        @error('nik')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition"
                                placeholder="Password">
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition"
                                placeholder="Confirm Password">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-4 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                        Submit
                    </button>
                    
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-500">Already registered? <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline">Check your status</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
