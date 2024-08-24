<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css'])
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="text-xl font-bold">
                Abu Ahamed Rafi
            </div>
            <ul class="flex space-x-4">
                <li><a href="#about" class="hover:text-blue-500">About</a></li>
                <li><a href="#projects" class="hover:text-blue-500">Projects</a></li>
                <li><a href="#skills" class="hover:text-blue-500">Skills</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-10">
        <section id="about" class="my-12">
            <h2 class="text-3xl font-bold mb-6">About Me</h2>
            <p class="text-lg leading-relaxed">
                Brief introduction about yourself, your background, and what you do.
            </p>
        </section>

        <section id="projects" class="my-12">
            <h2 class="text-3xl font-bold mb-6">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-xl font-semibold mb-2">Project Title 1</h3>
                    <p class="leading-relaxed">Description of the project.</p>
                </div>
            </div>
        </section>

        <section id="skills" class="my-12">
            <h2 class="text-3xl font-bold mb-6">Skills</h2>
            <ul class="list-disc list-inside">
                <li>Skill 1</li>
                <li>Skill 2</li>
                <!-- Add more skills -->
            </ul>
        </section>

        <section id="contact" class="my-12">
            <h2 class="text-3xl font-bold mb-6">Contact</h2>
            <p class="leading-relaxed">How people can reach you (email, LinkedIn, etc.).</p>
        </section>

        <section>
            <div id="regions_div" class="mx-auto my-8" style="width: 800px; height: 500px;"></div>
            <div class="mx-auto my-8" style="width: 800px; text-align: center;">
                <input type="range" min="1" max="10" value="5" id="zoomSlider">
            </div>
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
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2024. All rights reserved.
        </div>
    </footer>

</body>

</html>
