<?php
$mysqli = mysqli_connect("localhost", "root", "", "crm_data");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// SQL query to fetch month-wise visit count
$sql = "SELECT COUNT(*) AS visit_count, DATE_FORMAT(`date`, '%Y-%m') AS month_year 
        FROM `main_table` 
        GROUP BY month_year 
        ORDER BY month_year DESC;";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Loop through all the rows
    while ($row = $result->fetch_assoc()) {
        $visit_count = $row['visit_count'];
        $month_year = $row['month_year'];
        echo "Month: " . $month_year . " - Visits: " . $visit_count . "<br>";
    }
} else {
    echo "No data found.";
}

$mysqli->close();
?>
