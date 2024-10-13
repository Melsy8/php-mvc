<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>KapSel | Visualisasi</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var digimon = <?php echo $digimons; ?>;
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(digimon);
            var options = {
                title: 'Digimon Attribute',
                legend: {
                    position: 'bottom'
                }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('colchart_div'));
            chart.draw(data, options);
            var charts = new google.visualization.PieChart(document.getElementById('piechart_div'));
            charts.draw(data, options);
        }
    </script>
</head>

<body>
    @include('partial.navbars')
    <div class="container-fluid px-5">
    </div>
    </nav>
    <br>
    <div class="te text-center">
        <h3>Visualisasi Data Digimon berdasarkan Atributnya</h3>
    </div>
    <div class="container-fluid px-1">
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <p style="font-size: 20px"><b>Column Chart Visualization</b></p>
                    <div id="colchart_div" style="width: 100%; height: 600px"></div>
                </div>
                <div class="col-sm-6">
                    <p style="font-size: 20px"><b>Pie Chart Visualization</b></p>
                    <div id="piechart_div" style="width: 100%; height: 600px"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
