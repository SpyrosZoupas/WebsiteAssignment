<!DOCTYPE html>
<html>
<head>
	<title>Booking Page</title>
</head>
<body>
	<form action="time.php" method="post">
	<h2>Please select a timeslot.</h2>
		<select name="time">
          <option value="7:00-10:00">7:00-10:00</option>
          <option value="10:00-13:00">10:00-13:00</option>
          <option value="13:00-16:00">13:00-16:00</option>
          <option value="16:00-19:00">16:00-19:00</option>
          <option value="19:00-22:00">19:00-22:00</option>
        </select> 
		<button type="submit" value="click" name="timebutton">Confirm time slot</button>
	<h3>Due to popular demand, some timeslots might be temporarily unavailable.</h3>
	</form>
</body>
</html>

