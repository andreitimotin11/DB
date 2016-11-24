<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.11.2016
 * Time: 22:07
 */
$handle = opendir(__DIR__ . '/images');
while ($fileName = readdir($handle)) {
    if (!is_dir($fileName)) {
        //echo $fileName . ": " . var_dump(is_dir($fileName)) . "<br>";
        echo "<img src = 'images/" . $fileName . "' width='500' >";
    }
}