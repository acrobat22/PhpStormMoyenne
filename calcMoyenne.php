<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20/09/2016
 * Time: 16:50
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $index => $valeur){
    echo $index . " a : " . $valeur .' ans.' ."\n";
}

$moyenne = array_sum($students)/count($students);

echo "\n"."\n"."\n"."La moyenne d'âge des étudiants est de : " .$moyenne . ' ans';
