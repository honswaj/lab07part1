<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="PHP Arrays" />
    <meta name="keywords" content="PHP, HTML, arrays" />
    <title>Using PHP Arrays</title>
</head>
<body>
    <h1>PHP Arrays</h1>
<?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        echo "<p>The days of the week in English are:<br />";
        echo implode(", ", $days) . ".</p>";

        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    // implode is for the element of an array to merge into a single string
        echo "<p>The days of the week in French are:<br />";
        echo implode(", ", $days) . ".</p>";
?> 
</body>
</html>