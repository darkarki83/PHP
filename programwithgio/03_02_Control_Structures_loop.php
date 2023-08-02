<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php  //// Control Structures

$i = 0;
while(true) {
    while($i > 10) {
        break 2;
    }
    echo $i . '<br/>';
    $i++;
}

$i = 0;
while($i <= 15) {
    if($i % 2 === 0) {
        $i++;
        continue;
    }
    echo $i . '<br/>';
    $i++;
}

$bigArray = [];
for ($i = 1; $i <= 100; $i++) {
    $bigArray[] = $i;
}

// Using a for loop to process the elements in the big array
for ($j = 0; $j < count($bigArray); $j++) {
    // Do something with each element in the array
    echo $bigArray[$j] . "<br/>";
}

foreach ($bigArray as $key => &$value) {
    echo 'value ' . $value . '<br/>';
    echo 'key' . $key . '<br/>';
}

var_dump($bigArray);

$user = [
    'name' => 'Artiom',
    'login' => '123',
    'fruits' => ['Apple', 'Banana', 'Orange', 'Mango']
];

// Using foreach loop to access each key-value pair
foreach ($user as $key => $value) {

    if(is_array($value)){
        $value = implode(', ', $value);
    } 
    echo "$key: implode($value)<br>";
}
?>

</body>
</html>

