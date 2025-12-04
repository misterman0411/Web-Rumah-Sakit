<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Rumah Sakit Sehat') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-bg { background-color: #f3f4f6; }
    </style>
</head>
<body class="antialiased text-gray-800 bg-white">
    <!-- Navigation -->
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
                <a href="#" class="text-gray-900">Home</a>
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
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-900">Sign In</a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-gray-900 text-white text-sm font-medium hover:bg-gray-800 transition">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-bg relative overflow-hidden pt-12 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight mb-6">
                    OUR FOCUS <br>
                    <span class="text-gray-500 font-serif italic">YOUR HEALTH</span>
                </h1>
                <p class="text-gray-600 mb-8 max-w-xl mx-auto">
                    Providing world-class medical services with state-of-the-art facilities and compassionate care.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="#" class="px-8 py-3 bg-gray-900 text-white rounded-full font-medium hover:bg-gray-800 transition">Get Started</a>
                    <a href="#" class="px-8 py-3 bg-white text-gray-900 rounded-full font-medium border border-gray-200 hover:bg-gray-50 transition">Learn More</a>
                </div>
            </div>

            <!-- Hero Image & Stats -->
            <div class="relative max-w-5xl mx-auto mt-12">
                <div class="bg-gray-200 rounded-3xl overflow-hidden h-96 relative">
                    <!-- Placeholder for Doctor Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-gray-400">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="absolute top-10 right-[-20px] space-y-4 hidden lg:block">
                    <div class="bg-white p-4 rounded-xl shadow-lg w-40 text-center">
                        <p class="text-2xl font-bold text-gray-900">250+</p>
                        <p class="text-xs text-gray-500">Top Doctors</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-lg w-40 text-center">
                        <p class="text-2xl font-bold text-gray-900">120K</p>
                        <p class="text-xs text-gray-500">Happy Patients</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-lg w-40 text-center">
                        <p class="text-2xl font-bold text-gray-900">15+</p>
                        <p class="text-xs text-gray-500">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Find A Doctor -->
    <div class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <h3 class="text-2xl font-bold text-white">Find A Doctor</h3>
                <div class="flex-1 w-full md:w-auto flex flex-col md:flex-row gap-4">
                    <input type="text" placeholder="Name" class="w-full bg-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Specialty" class="w-full bg-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="bg-white text-gray-900 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Experts Section -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Get To Know Our Experts</h2>
                <p class="text-gray-500 mt-4">Explore our team of highly qualified medical professionals.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Doctor 1 -->
                <div class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-bold text-lg">Dr. John Doe</h3>
                    <p class="text-sm text-gray-500">Cardiologist</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white text-xs rounded-full">Book Now</button>
                </div>
                <!-- Doctor 2 -->
                <div class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-bold text-lg">Dr. Sarah Smith</h3>
                    <p class="text-sm text-gray-500">Dentist</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white text-xs rounded-full">Book Now</button>
                </div>
                <!-- Doctor 3 -->
                <div class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-bold text-lg">Dr. Michael Brown</h3>
                    <p class="text-sm text-gray-500">Neurologist</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white text-xs rounded-full">Book Now</button>
                </div>
                <!-- Doctor 4 -->
                <div class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4"></div>
                    <h3 class="font-bold text-lg">Dr. Emily White</h3>
                    <p class="text-sm text-gray-500">Pediatrician</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white text-xs rounded-full">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">What We Have</h2>
                <p class="text-gray-500 mt-4">We offer a wide range of medical specialties.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Cardiology</h3>
                    <p class="text-sm text-gray-500">Heart care services</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Dental Care</h3>
                    <p class="text-sm text-gray-500">Comprehensive dental</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Neurology</h3>
                    <p class="text-sm text-gray-500">Brain & nervous system</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-red-100 rounded-full mx-auto mb-4 flex items-center justify-center text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Emergency</h3>
                    <p class="text-sm text-gray-500">24/7 Urgent care</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold">Why Choose Us</h2>
                <p class="text-gray-400 mt-4">We are committed to providing the best healthcare experience.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center p-6 border border-gray-700 rounded-2xl">
                    <div class="w-12 h-12 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">24/7 Support</h3>
                    <p class="text-sm text-gray-400">Always here for you</p>
                </div>
                <div class="text-center p-6 border border-gray-700 rounded-2xl">
                    <div class="w-12 h-12 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Best Doctors</h3>
                    <p class="text-sm text-gray-400">Top rated specialists</p>
                </div>
                <div class="text-center p-6 border border-gray-700 rounded-2xl">
                    <div class="w-12 h-12 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Emergency Service</h3>
                    <p class="text-sm text-gray-400">Rapid response</p>
                </div>
                <div class="text-center p-6 border border-gray-700 rounded-2xl">
                    <div class="w-12 h-12 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold mb-2">Easy Appointment</h3>
                    <p class="text-sm text-gray-400">Book online instantly</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white pt-16 pb-8 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="font-bold text-xl mb-4">UPTEAMIST</h3>
                    <p class="text-gray-500 text-sm">Dedicated to providing the best healthcare services to our community.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Departments</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#" class="hover:text-gray-900">Cardiology</a></li>
                        <li><a href="#" class="hover:text-gray-900">Neurology</a></li>
                        <li><a href="#" class="hover:text-gray-900">Orthopedics</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Links</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#" class="hover:text-gray-900">About Us</a></li>
                        <li><a href="#" class="hover:text-gray-900">Services</a></li>
                        <li><a href="#" class="hover:text-gray-900">Doctors</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li>123 Health Street</li>
                        <li>(123) 456-7890</li>
                        <li>info@upteamist.com</li>
                    </ul>
                </div>
            </div>
            <div class="text-center text-sm text-gray-400 pt-8 border-t border-gray-100">
                &copy; {{ date('Y') }} Rumah Sakit Sehat. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
