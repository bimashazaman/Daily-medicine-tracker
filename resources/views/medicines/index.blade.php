<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicines</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto my-10 bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Medicines</h1>
        {{-- authenticated user --}}
        @php
            $user = auth()->user();

            if ($user) {
                echo 'Welcome ' . $user->name . ',';
            }
        @endphp



        <div class="flex justify-end mb-4">
            <a href="{{ route('medicines.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Add
                Medicine</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-100 border-b border-gray-200 text-gray-700">
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
                        <tr class="border-b hover:bg-gray-50">
                            <td class="border-r  px-4 py-3">{{ $item->name }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->dose }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->frequency }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->route }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->indication }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->start_date }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->end_date }}</td>
                            <td class="border-r  px-4 py-3">{{ $item->prescriber }}</td>
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

</body>

</html>
