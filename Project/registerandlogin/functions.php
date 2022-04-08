<?php
session_start();

if(isset($_POST['timebutton']))
{
   booking_timeslot();
   
} elseif($_POST['daybutton']) {

   booking_day();
}
?>


