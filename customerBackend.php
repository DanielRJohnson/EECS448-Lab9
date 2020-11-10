<style> <?php include 'webStoreStyle.css'; ?> </style>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    $un = $_POST["username"];
    $pw = $_POST["password"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $ship = $_POST["shipping"];

    echo "Welcome " . $un . "!<br>";
    echo "Password: " . $pw . "<br>";

    echo "<br><br>";

    echo "<table>";
    
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 1</th>";
    echo "<td>" . $Q1 . "</td>";
    echo "<td>" . "$1" . "</td>";
    echo "<td>$" . (1 * $Q1) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 2</th>";
    echo "<td>" . $Q2 . "</td>";
    echo "<td>" . "$4" . "</td>";
    echo "<td>$" . (4 * $Q2) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 3</th>";
    echo "<td>" . $Q3 . "</td>";
    echo "<td>" . "$5" . "</td>";
    echo "<td>$" . (5 * $Q3) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Shipping</th>";
    echo "<td colspan='2'>" . $ship . "</td>";
    $shipCost = 0;
    if ($ship == "Free 7 Day") $shipCost = 0;
    if ($ship == "$50.00 Over Night") $shipCost = 50;
    if ($ship == "$5.00 3 Day") $shipCost = 5;
    echo "<td>$" . $shipCost . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan='3'>Total Cost</th>";
    echo "<td>$" . ( $shipCost + (1 * $Q1) + (4 * $Q2) + (5 * $Q3) ) . "</td>";
    echo "</tr>";

    echo "</table>";
?>