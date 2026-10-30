<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Rohirrim Tour Booking Confirmation" />
    <meta name="keywords" content="PHP, Booking, Confirmation" />
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
 
<?php
    $firstname = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : "ERROR";
    $lastname = isset($_POST["lastname"]) ? trim($_POST["lastname"]) : "ERROR";
    $age = isset($_POST["age"]) ? trim($_POST["age"]) : "ERROR";
    $food = isset($_POST["food"]) ? $_POST["food"] : "";
    $partyNo = isset($_POST["partyNo"]) ? $_POST["partyNo"] : "ERROR";
    $tour4day = isset($_POST["4day"]) ? "4-day tour" : "ERROR";
    $tour10day = isset($_POST["10day"]) ? "10-day tour" : "ERROR";

    $tour4day  = isset($_POST["4day"]);
    $tour10day = isset($_POST["10day"]);
    
    $tour = array()
    if (!empty ($tour4day)) $tour[] = $tour4day
    if (!empty ($tour10day)) $tour[] = $tour10day
    $tours = !empty($tour) ? implode(" and ", $tour) : "None selected";

    echo "<p>Welcome <strong>$firstname $lastname</strong>!</p>";
    echo "<p>You are <strong>$age</strong> years old.</p>";
    echo "<p>Your food preference is: <strong>$food</strong>.</p>";
    echo "<p>Number of travelers: <strong>$partyNo</strong>.</p>";
    echo "<p>Selected tour options: <strong>$tourOutput</strong>.</p>";
?>
</body>
</html>

