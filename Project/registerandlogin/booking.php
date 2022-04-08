<h1>Booking</h1>
<form action="insertBooking.php" method="post">
  <?php
  // @TODO - MINIMUM DATE (TODAY)
  // $mindate = date("Y-m-d", strtotime("+2 days"));
  $mindate = date("d-m-Y");
  ?>
  <label>Booking Date</label>
  <input type="date" required id="date" name="date" value="<?=date("d-m-Y")?>">

  <label>Timeslot</label>
  <select name="time">
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>

  <input type="submit" value="Submit"/>
</form>