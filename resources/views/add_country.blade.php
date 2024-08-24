<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Country</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-xl font-bold">Abu Ahamed Rafi</a>
            <div>
                <a href="{{ route('country.index') }}" class="text-white hover:text-gray-200 mx-2">Home</a>
                <a href="{{route('country.create')}}" class="text-white hover:text-gray-200 mx-2">Add Country</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-600">Add a New Country</h1>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="country" class="block text-gray-700 font-medium">Country:</label>
                <input type="text" id="country" name="country" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div>
                <label for="popularity" class="block text-gray-700 font-medium">Popularity:</label>
                <input type="number" id="popularity" name="popularity" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Create</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-10 p-4 text-center text-white">
        <p>&copy; 2024. All rights reserved.</p>
    </footer>

</body>
</html>
