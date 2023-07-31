<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>


<?php

$isComplete = false;

// integer 0, -0 = false
// float 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump(is_bool($isComplete));


if($isComplete) {
    var_dump($isComplete);
    
} else {
    echo $isComplete;
}

?>

</body>

</html>
