<?php include ("header.inc");?>
<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "<p>Welcome, " . $_SESSION['user'] . "</p>";   
} else {
    header('Location: login.html');
}
?>
<?php include ("footer.inc");?>