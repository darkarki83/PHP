<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php

/**  require and include
 */

ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

echo $nav;



?>
</body>

</html>

<?php
?>
