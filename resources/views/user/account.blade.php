<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <!-- Header / Cover -->
        <div class="bg-teal-500 h-48 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-between">
                <h1 class="text-white text-2xl font-bold">My Profile</h1>
                <div class="flex gap-2">
                    <button class="p-2 bg-teal-600 rounded-lg text-white hover:bg-teal-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="p-2 bg-teal-600 rounded-lg text-white hover:bg-teal-700 transition" title="Logout">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Profile Info -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-12">
            <!-- Profile Picture & Name -->
            <div class="text-center mb-12">
                <div class="relative inline-block">
                    <div class="w-32 h-32 bg-white rounded-full p-1 shadow-lg mx-auto">
                        <div class="w-full h-full bg-gray-200 rounded-full flex items-center justify-center overflow-hidden">
                            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <h2 class="mt-4 text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500">Patient</p>
            </div>

            <!-- Info Grid -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Basic Info -->
                    <div class="space-y-4">
                        <h3 class="font-bold text-gray-700 border-b pb-2">Your Basic Info</h3>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Full Name</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                {{ Auth::user()->name }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Email</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Phone</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                {{ Auth::user()->phone_number ?? '-' }}
                            </div>
                        </div>
                    </div>

                    <!-- Personal Details -->
                    <div class="space-y-4">
                        <h3 class="font-bold text-gray-700 border-b pb-2">Personal Details</h3>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">ID Number (NIK)</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                {{ Auth::user()->nik ?? '-' }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Gender</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                -
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Date of Birth</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- Medical Stats (Placeholder) -->
                    <div class="space-y-4">
                        <h3 class="font-bold text-gray-700 border-b pb-2">Medical Stats</h3>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Blood Type</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                -
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Weight (kg)</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                -
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Height (cm)</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                -
                            </div>
                        </div>
                    </div>

                    <!-- Account Status -->
                    <div class="space-y-4">
                        <h3 class="font-bold text-gray-700 border-b pb-2">Account Status</h3>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Member Since</label>
                            <div class="mt-1 p-2 bg-gray-50 rounded border border-gray-200 text-gray-800 text-sm">
                                {{ Auth::user()->created_at->format('d M Y') }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 uppercase">Status</label>
                            <div class="mt-1 p-2 bg-green-50 rounded border border-green-200 text-green-700 text-sm font-medium">
                                Active
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section (Visual Placeholder) -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold text-gray-700 mb-4">Health Overview</h3>
                        <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-600">General Health</span>
                                        <span class="font-bold text-teal-600">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-teal-500 h-2.5 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-600">Checkup Attendance</span>
                                        <span class="font-bold text-blue-600">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-gray-700 mb-4">Recent Activity</h3>
                        <div class="bg-gray-50 rounded-lg p-6 border border-gray-200 flex items-center justify-center h-40">
                            <p class="text-gray-400 text-sm">No recent medical activity recorded.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
