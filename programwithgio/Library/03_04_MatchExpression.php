<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php  //// Control Structures

$dayOfWeek = 3;

switch($dayOfWeek) {
    case 1:
        echo 'Today is Monday.';
        break;
    case 2:
        echo 'Today is Tuesday.';
        break;
    case 3:
        echo 'Today is Wednesday';
        break;
    case 4:
        echo 'Today is Thursday.';
        break;
    case 5:
        echo 'Today is Friday.';
        break;
    case 6:
        echo 'Today is Saturday';
        break;
    case 7:
        echo 'Today is Sunday.';
        break;
    default:
        echo 'Wrong Day';
        break;
}

$message = match ($dayOfWeek) {
    1 => "Today is Monday.",
    2 => "Today is Tuesday.",
    3 => "Today is Wednesday.",
    4 => "Today is Thursday.",
    5 => "Today is Friday.",
    6 => "Today is Saturday.",
    7 => "Today is Sunday.",
    default => "Invalid day."
};

echo $message;


?>

</body>

</html>

