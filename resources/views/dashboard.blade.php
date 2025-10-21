<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex items-center">
                        <div class="p-3 rounded-full bg-indigo-500 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-500">Total Students</div>
                            <div class="text-lg font-semibold text-gray-900">{{ $studentCount }}</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex items-center">
                        <div class="p-3 rounded-full bg-green-500 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-500">Total Guardians</div>
                            <div class="text-lg font-semibold text-gray-900">{{ $guardianCount }}</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex items-center">
                        <div class="p-3 rounded-full bg-blue-500 text-white mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-500">Total Classes</div>
                            <div class="text-lg font-semibold text-gray-900">{{ $classCount }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Latest Students -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Latest Students</h3>
                        <ul>
                            @foreach ($latestStudents as $student)
                                <li class="border-b py-2">{{ $student->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Latest Guardians -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">Latest Guardians</h3>
                        <ul>
                            @foreach ($latestGuardians as $guardian)
                                <li class="border-b py-2">{{ $guardian->contact_info }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Latest Announcements -->
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Latest Announcements</h3>
                    @foreach ($announcements as $announcement)
                        <div class="mb-4">
                            <h4 class="text-md font-semibold">{{ $announcement->title }}</h4>
                            <p class="text-gray-600">{{ $announcement->content }}</p>
                            <p class="text-sm text-gray-500 mt-1">{{ $announcement->created_at->diffForHumans() }} by {{ $announcement->user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>