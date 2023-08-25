<?php

// Working with filesystem


//$dir = scandir(__DIR__);


//var_dump(is_dir($dir[3]));

//mkdir('foo'); // create directory

//rmdir('foo');  // delete directory

//mkdir('foo/bar', recursive: true);

//rmdir('foo/bar');
//rmdir('foo');
/*
if(file_exists('foo.txt')) {
    echo filesize('foo.txt');

    file_put_contents('foo.txt', 'Hello new world');

    clearstatcache();
    echo filesize('foo.txt');

} else {
    echo 'file not found';
}

if(!file_exists('foo.txt')) {
    echo 'file not found';

    return;
}

$file = fopen('foo.txt', 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line. '<br />';  // Process the line, you can replace this with your desired logic
    }
    
} else {
    echo "Failed to open the file.";
}
// way read from file;

fclose($file);  // Close the file when done

$content = file_get_contents('foo.txt', offset:3, length:2);

echo $content;

*/

// reread txt to content

//file_put_contents('bar.txt', 'My name is A..', FILE_APPEND);

//unlink('bar.txt');  // delete file bar.txt

//copy('foo.txt', 'bar.txt');

//rename('foo.txt', 'bar.txt');

?>