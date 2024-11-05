<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @php
                $user = auth()->user();

                if ($user) {
                    echo 'Welcome ' . $user->name . ' ' . 'Tomar Medicines' . ',';
                }
            @endphp
        </h2>
    </x-slot>



    <div class="max-w-7xl mx-auto my-10 p-8 bg-white mt-4 dark:bg-gray-800 rounded-lg shadow-lg">


        <div class="flex justify-end mb-3">
            <a href="{{ route('medicines.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Add
                Medicine</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white dark:bg-gray-800 border border-gray-200 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                        <th class="px-4 py-3 text-left font-semibold">Name</th>
                        <th class="px-4 py-3 text-left font-semibold">Dose</th>
                        <th class="px-4 py-3 text-left font-semibold">Frequency</th>
                        <th class="px-4 py-3 text-left font-semibold">Route</th>
                        <th class="px-4 py-3 text-left font-semibold">Indication</th>
                        <th class="px-4 py-3 text-left font-semibold">Start Date</th>
                        <th class="px-4 py-3 text-left font-semibold">End Date</th>
                        <th class="px-4 py-3 text-left font-semibold">Prescriber</th>
                        <th class="px-4 py-3 text-left font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicines as $item)
                        <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->name }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->dose }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->frequency }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->route }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->indication }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->start_date }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->end_date }}</td>
                            <td class="border-r px-4 py-3 text-gray-800 dark:text-gray-200">{{ $item->prescriber }}
                            </td>
                            <td class="px-4 py-3 space-x-2 flex items-center">
                                <a href="{{ route('medicines.edit', $item->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Edit</a>
                                <form action="{{ route('medicines.destroy', $item->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
