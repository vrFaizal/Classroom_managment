<?php
// Time to start with
$startTime = '12:23:00';

// Create a DateTime object from the start time
$dateTime = DateTime::createFromFormat('H:i:s', $startTime);

// Add 1 hour to the DateTime object
$dateTime->modify('+1 hour');

// Format the resulting time
$newTime = $dateTime->format('H:i:s');

// Output the new time
echo "Original time: $startTime<br>";
echo "Time after adding 1 hour: $newTime";
?>