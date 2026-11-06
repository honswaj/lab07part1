<?php include 'header.inc';?>
<?php
session_start();
if (isset($_SESSION['user'])) {
    include "header.inc";
    echo "<p>Welcome, " . $_SESSION['user'] . "</p>";    include "footer.inc";
} else {
    header('Location: login.html');
}
?>
<?php include 'footer.inc';?>