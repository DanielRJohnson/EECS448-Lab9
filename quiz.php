<style> <?php include 'webStoreStyle.css'; ?> </style>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];

    echo "Question 1: What is the capital of Nevada?<br>";
    echo "You answered: " . $Q1 . "<br>";
    echo "Correct answer: Carson City<br><br>";

    echo "Question 2: What is the capital of Arizona?<br>";
    echo "You answered: " . $Q2 . "<br>";
    echo "Correct answer: Phoenix<br><br>";

    echo "Question 3: What is the capital of Georgia?<br>";
    echo "You answered: " . $Q3 . "<br>";
    echo "Correct answer: Atlanta<br><br>";

    echo "Question 4: What is the capital of Pennsylvania?<br>";
    echo "You answered: " . $Q4 . "<br>";
    echo "Correct answer: Harrisburg<br><br>";

    echo "Question 5: What is the capital of Wisconsin?<br>";
    echo "You answered: " . $Q5 . "<br>";
    echo "Correct answer: Madison<br><br>";

    $correct = 0;
    if ($Q1 == "Carson City") $correct++;
    if ($Q2 == "Phoenix") $correct++;
    if ($Q3 == "Atlanta") $correct++;
    if ($Q4 == "Harrisburg") $correct++;
    if ($Q5 == "Madison") $correct++;

    echo "Total correct: " . $correct . "<br>";
    echo "Score: " . ($correct * 20) . "%<br>";

?>