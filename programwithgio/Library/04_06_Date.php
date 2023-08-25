<?php

// Date

$currentTime  = time();

echo $currentTime . '<br />';

echo $currentTime + 5 * 24 * 60 * 60 . '<br />';

echo $currentTime - 60 * 60 * 24 . '<br />';

echo date_default_timezone_get() . '<br />';

date_default_timezone_set('UTC');

echo date('m/d/Y g:ia') . '<br />';
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 *60 ) . '<br />';

echo date_default_timezone_get() . '<br />';

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br />';
echo date('m/d/Y g:ia', strtotime('2021-02-18-07:00:00'));
$date = date('m/d/Y g:ia', strtotime('first day of January'));

echo '<pre />';
print_r(date_parse_from_format('m/d/Y g:ia',$date));
echo '<pre />' 



?>