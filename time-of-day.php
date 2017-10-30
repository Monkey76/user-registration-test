<?php 
date_default_timezone_set('America/New_York');

$current_time = DateTime::createFromFormat('H:i a', date("h:i a"));       // Current Time
$morning = DateTime::createFromFormat('H:i a', "12:00 am");              // Morning Starts
$afternoon = DateTime::createFromFormat('H:i a', "12:00 pm");           // Afternoon Starts
$evening = DateTime::createFromFormat('H:i a', "6:00 pm");             // Evening Starts

// If current_time is between morning start and afternoon start 
if ($current_time > $morning && $current_time < $afternoon)
{ 
	echo "Good Morning!";
}
// If current_time is between afternoon start and evening start
elseif ($current_time > $afternoon && $current_time < $evening) 
{
	echo "Good Afternoon!";
}
// If current_time after evening start
else
{
	echo "Good Evening!";
}
?>