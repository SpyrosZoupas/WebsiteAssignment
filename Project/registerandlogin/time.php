<?php
 session_start();
 $_SESSION['time'] = $_POST['time'];
 header("Location: bookingConfirmation.php");
?>

