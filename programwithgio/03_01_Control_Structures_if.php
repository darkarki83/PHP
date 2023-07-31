<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php  //// Control Structures
?>


<?php $score = 30 ?>

<?php if ($score >= 90): ?> 
    <strong>A</strong>
    <?php if ($score >= 95): ?>
        <strong>+</strong>
    <?php endif; ?>

<?php elseif ($score >= 80): ?>
    <strong>B</strong>

<?php elseif ($score >= 70): ?>
    <strong>C</strong>

<?php elseif ($score >= 60): ?>
    <strong>D</strong>

<?php else: ?>
    <strong style="color:red;">F</strong>

<?php endif; ?>


</body>

</html>

