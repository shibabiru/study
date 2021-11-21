<?php

$wrongs = [];
$corrects = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $q1 = $_POST['q1'];

    if($q1 === "柴犬") {
        $corrects[] = "a1";
    } elseif($q1 === '') {
        $wrongs[] = 'blank';
    } else {
        $wrongs[] = "a1";
    }

    $q2 = $_POST['q2'];
    
    if(in_array("1",(array)$q2) && in_array("2",(array)$q2) && in_array("3",(array)$q2)) {       
        $corrects[] = "a2";
    } elseif(is_null($_POST['q2'])){
        $wrongs[] = 'blank';
    } else {       
        $wrongs[] = "a2";
    }

    $q3 = $_POST['q3'];

    if($q3 === "1") {
        $corrects[] = "a3";
    } elseif(is_null($_POST['q2'])){
        $wrongs[] = 'blank';
    } else {
        $wrongs[] = "a3";
    }
}
