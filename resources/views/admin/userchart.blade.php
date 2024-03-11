<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Canvas element for the chart -->
    <canvas id="chart"></canvas>
    
    <script>
        // JavaScript code to render the chart
        var ctx = document.getElementById('chart').getContext('2d');
        var userChart = new Chart(ctx, {
            type: 'bar', // specify the chart type (e.g., bar, line, etc.)
            data: { 
                labels: {!! json_encode($labels) !!}, // specify the labels for the x-axis
                datasets: {!! json_encode($datasets) !!} // specify the datasets for the chart
            }
        });
    </script>
</body>
</html>
