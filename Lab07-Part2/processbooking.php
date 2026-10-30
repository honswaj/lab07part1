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
        $firstname = isset($_POST["firstname"]) ? trim($_POST["firstname"]);
        $lastname  = isset($_POST["lastname"]) ? trim($_POST["lastname"]);
        $age       = isset($_POST["age"]) ? trim($_POST["age"]);
        $food      = isset($_POST["food"]) ? $_POST["food"];
        $partySize = isset($_POST["partySize"]) ? $_POST["partySize"];

        $tour4day  = isset($_POST["4day"]) ? "4-day tour";
        $tour10day = isset($_POST["10day"]) ? "10-day tour";

        $tours = array();
        if (!empty($tour4day))  $tours[] = $tour4day;
        if (!empty($tour10day)) $tours[] = $tour10day;
        $tourOutput = !empty($tours) ? implode(" and ", $tours) : "None selected";

        echo "<p>Welcome <strong>$firstname $lastname</strong>!</p>";
        echo "<p>You are <strong>$age</strong> years old.</p>";
        echo "<p>Your food preference is: <strong>$food</strong>.</p>";
        echo "<p>Number of travelers: <strong>$partySize</strong>.</p>";
        echo "<p>Selected tour options: <strong>$tourOutput</strong>.</p>";
    ?>
</body>
</html>

