<?php

$username = "groot";
$password = "groot";

session_start();
if (!($_POST['username'] == $username && $_POST['password'] == $password)) {
   echo "<script>alert('Incorrect username or password!')</script>";
   header("location: login.php");
}

$_SESSION['username'] = $_POST['username'];
include('./header.php');
?>

<header>
   <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
</header>

<a href="logout.php"><input type="button" value="Logout" name logout></a>

</body>


</html>