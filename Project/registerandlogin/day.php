<?php
 session_start();
 $_SESSION['day'] = $_POST['day'];
 header("Location: booking2.php");
?>
