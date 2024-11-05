<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Medicine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900">

    <div class="max-w-lg mx-auto my-10 bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-6 text-center">Edit Medicine</h1>

        <form action="{{ route('medicines.update', $medicine->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->name }}">
            </div>

            <div>
                <label for="dose"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Dose</label>
                <input type="text" name="dose" id="dose"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->dose }}">
            </div>

            <div>
                <label for="frequency"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Frequency</label>
                <input type="text" name="frequency" id="frequency"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->frequency }}">
            </div>

            <div>
                <label for="route"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Route</label>
                <input type="text" name="route" id="route"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->route }}">
            </div>

            <div>
                <label for="indication"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Indication</label>
                <input type="text" name="indication" id="indication"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->indication }}">
            </div>

            <div>
                <label for="start_date" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Start
                    Date</label>
                <input type="date" name="start_date" id="start_date"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->start_date }}">
            </div>

            <div>
                <label for="end_date" class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">End
                    Date</label>
                <input type="date" name="end_date" id="end_date"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->end_date }}">
            </div>

            <div>
                <label for="prescriber"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Prescriber</label>
                <input type="text" name="prescriber" id="prescriber"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->prescriber }}">
            </div>

            <div>
                <label for="price"
                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Price</label>
                <input type="number" name="price" id="price"
                    class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $medicine->price }}">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Update
                    Medicine</button>
            </div>
        </form>
    </div>

</body>

</html>
