<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('students.index') }}" method="GET" class="mb-4">
                        <div class="flex items-center">
                            <input type="text" name="search" class="form-input rounded-md shadow-sm" placeholder="Search by name..." value="{{ request('search') }}">
                            <button type="submit" class="ml-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Search
                            </button>
                        </div>
                    </form>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date of Birth
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sex
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fee Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($students as $student)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->dob }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->sex }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $student->fee_status ? 'Paid' : 'Unpaid' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
