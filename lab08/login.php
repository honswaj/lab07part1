<?php include ("header.inc");?>

<h2>Login</h2>
<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>"

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
</form>
<?php include ("footer.inc");?>