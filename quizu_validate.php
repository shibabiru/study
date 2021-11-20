<?php

$wrongs = [];
$corrects = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $q1 = $_POST['q1'];
    if($q1 === "柴犬") {
        $corrects[] = "q1";
    } else {
        $wrongs[] = "q1";
    }

    $q2 = $_POST['q2'];
    if(in_array("1",$q2) && in_array("2",$q2) && in_array("3",$q2)) {
        $corrects[] = "q2";
    } else {
        $wrongs[] = "q2";
    }

    $q3 = $_POST['q3'];
    if($q3 === "1") {
        $corrects[] = "a3";
    } else {
        $wrongs[] = "a3";
    }
}
