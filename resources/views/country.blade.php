<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-xl font-bold">Map Module</a>
            <div>
                <a href="{{ route('country.index') }}" class="text-white hover:text-gray-200 mx-2">Home</a>
                <a href="{{route('country.create')}}" class="text-white hover:text-gray-200 mx-2">Add Country</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold text-center mb-6 text-blue-600">Welcome to Map Module</h1>
        <p class="text-center text-gray-700">Try this in your own website</p>
    </section>

    <!-- Features Section -->
    {{-- <section class="container mx-auto mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white shadow-lg rounded-lg text-center">
            <h2 class="text-xl font-bold text-blue-600">Projects</h2>
            <p class="mt-4 text-gray-700">Take a look at some of my latest work.</p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-lg text-center">
            <h2 class="text-xl font-bold text-blue-600">Skills</h2>
            <p class="mt-4 text-gray-700">Discover the tools and technologies I excel in.</p>
        </div>
        <div class="p-6 bg-white shadow-lg rounded-lg text-center">
            <h2 class="text-xl font-bold text-blue-600">Contact</h2>
            <p class="mt-4 text-gray-700">Let's work together! Reach out to me for collaboration.</p>
        </div>
    </section> --}}
    
    <section class="container mx-auto mt-10 flex justify-center items-center"> 
        <div id="regions_div" style="width: 900px; height: 500px;"></div>
    </section>
    <script>
        var chartData = @json($chartData);

        google.charts.load('current', {
            'packages': ['geochart'],
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
                ['Country', 'Popularity'],
                ...chartData
            ]);

            var options = {};

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
        }
    </script>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-10 p-4 text-center text-white">
        <p>&copy; 2024. All rights reserved.</p>
    </footer>

</body>

</html>
