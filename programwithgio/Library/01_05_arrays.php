<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>


<?php
/*   Array     */

$progLanguages = ['PHP', 'Java', 'Python'];

//echo $progLanguages[0];
// check if the index exists
var_dump((isset($progLanguages[0])));


//$progLanguages[] = 'C++';
array_push($progLanguages, 'C++', 'C', 'Go');



echo '<pre>';
print_r($progLanguages);
echo '</pre>';

echo count($progLanguages);



$progLanguages = [
    'php' => [
        'description' => 'PHP is a server-side scripting language commonly used for web development. It is embedded within HTML and can be used to create dynamic and interactive web pages.',
        'year_created' => 1994,
        'inventor' => 'Rasmus Lerdorf',
        'website' => 'https://www.php.net/',
        'frameworks' => ['Laravel', 'Symfony', 'CodeIgniter'],
        'usage' => [
            'web' => true,
            'desktop' => false,
            'mobile' => false,
        ],
    ], 
    'python' => [
        'description' => 'Python is a versatile, high-level programming language known for its readability and simplicity. It is used for web development, data analysis, artificial intelligence, and more.',
        'year_created' => 1991,
        'inventor' => 'Guido van Rossum',
        'website' => 'https://www.python.org/',
        'frameworks' => ['Django', 'Flask', 'Pyramid'],
        'usage' => [
            'web' => true,
            'desktop' => true,
            'mobile' => true,
        ],
    ]
];

echo '<pre>';
print_r($progLanguages);
echo '</pre>';

echo $progLanguages['php']['usage']['web'];

$array = [null, 'b', 50 => 'c', 'd', 'e', 'f', ];

echo '<pre>';
print_r($array);
echo '</pre>';

// remove last element
//array_pop($array);

// remote first element and reindex
//array_shift($array);

// remote NOT reindex
unset($array[50]);


echo '<pre>';
print_r($array);
echo '</pre>';

// 
var_dump((array_key_exists(0, $array)));

var_dump(isset($array[0]));



?>

</body>

</html>
