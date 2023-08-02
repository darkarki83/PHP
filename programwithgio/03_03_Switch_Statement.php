<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php  //// Control Structures

// Example: Get the day of the week based on a numeric representation (1-7)

$dayNumber = 5; // Change this value to test different cases

switch ($dayNumber) {
    case 1:
        $dayName = "Sunday";
        break;
    case 2:
        $dayName = "Monday";
        break;
    case 3:
        $dayName = "Tuesday";
        break;
    case 4:
        $dayName = "Wednesday";
        break;
    case 5:
        $dayName = "Thursday";
        break;
    case 6:
        $dayName = "Friday";
        break;
    case 7:
        $dayName = "Saturday";
        break;
    default:
        $dayName = "Invalid day number";
        break;
}

echo "The day number $dayNumber corresponds to $dayName.";

?>

</body>

</html>

