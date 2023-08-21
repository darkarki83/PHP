<?php
//phpinfo();

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

// classes & Object
/*
declare(strict_types=1);

require_once '../Transaction.php';

//$class = 'Transaction';

$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTex(6)
    ->applyDiscount(10);

$transaction2 = (new Transaction(25, 'Transaction 2'))
    ->addTex(8)
    ->applyDiscount(10);

$amount1 =  $transaction1->getAmount();
$amount2 =  $transaction2->getAmount();
//unset($transaction1);    // no work a lot

var_dump($amount1);

*/

$str = '{"a":1,"b":2,"c":3}';

$arr = json_decode(($str));

var_dump($arr->a);

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;
$obj->c = 3;

var_dump($obj);

$newArray = [1, 2, 3];
$obj = (object) $newArray;

var_dump($obj->{2});
var_dump((object) 1);





?>
