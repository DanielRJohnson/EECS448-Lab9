<style> <?php include 'webStoreStyle.css'; ?> </style>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    echo "<p>PHP Multiplication Table</p>";

    echo "<table style='border: 1px solid black, width: 100%'>";
    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++){
            echo "<td style='border: 1px solid black'>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>