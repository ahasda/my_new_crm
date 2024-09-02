<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// session_start();

$conn = mysqli_connect("localhost", "root", "", "crm_data");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query =  "SELECT * FROM main_table";

?>

<!doctype html>
<html class="no-js" lang="en">


<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Bracket Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <!-- <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
  <!-- <link href="../lib/chartist/chartist.css" rel="stylesheet"> -->

  <!-- pagination cdn  -->
  <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">

</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);

    body {
        font-family: Roboto, sans-serif;
    }

    #chart {
        width: 40vw;
        margin: 35px auto;
    }

    #chart_year {
        width: 40vw;
        margin: 35px auto;
    }

    textarea {
        background-color: transparent;
        color: white;
    }
</style>

<body class="skin-dark">


<div class="container">
    <div class="row">
        
    <div class="main-wrapper">


<!-- Content Body Start -->
<div class="content-body">

    <!-- Page YEAR Start -->
    <div class="row p-5">
    <h3>Hours Data</h3>
        <div id="chart_year">
            
        </div>
    </div>
    <!-- Page YEAR Start -->

    <!-- Page Headings Start -->
    <div class="row">
    <h3>Month Data</h3>
        <div id="chart">
           
        </div>
    </div>
    <!-- Page Headings End -->



</div><!-- Content Body End -->

<!-- Footer Section Start -->
<div class="footer-section">
    <div class="container-fluid">

        <div class="footer-copyright text-center">
            <p class="text-body-light">2024 &copy; <a href="https://themeforest.net/user/codecarnival">Litem Legalis</a></p>
        </div>

    </div>
</div><!-- Footer Section End -->

</div>

    </div>
</div>
    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>


    <!-- pagination data  -->
    <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>


    <script>
        // let table = new DataTable('#myTable');
        new DataTable('#myTable', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>

</body>


</html>



<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php
$conn = mysqli_connect("localhost", "root", "", "crm_data");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT DAY(`date`) as day, COUNT(*) AS count FROM `main_table` WHERE MONTH(`date`) = MONTH(CURDATE()) AND YEAR(`date`) = YEAR(CURDATE()) GROUP BY DAY(`date`)");

$daywiseData = array_fill(1, 31, 0);

if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $daywiseData[(int)$row['day']] = (int)$row['count'];
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
    die();
}

mysqli_close($conn);
?>

<script>
    var daysInMonth = 31;
    var categories = [];
    for (var i = 1; i <= daysInMonth; i++) {
        categories.push(i);
    }

    // PHP data to JavaScript
    var daywiseData = <?php echo json_encode(array_values($daywiseData)); ?>;

    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'Queries',
            data: daywiseData
        }],
        colors: ['#008000'],
        chart: {
            height: 273,
            type: 'area',
            zoom: {
                enabled: false
            }
        },
        xaxis: {
            categories: categories
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>

