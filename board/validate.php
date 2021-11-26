<?php
const BLANK = "blank";
const MAX_LENGTH = "max_length";


function validateName($postName) {
    var_dump($postName);
    if ($postName === '') {
        return BLANK;
    } elseif (mb_strlen($postName) > 10) {
        return MAX_LENGTH;
    } 
    return "";
}

$errors['name'] = validateName($_POST['name']);


// function validateName($postName) {
//     if ($postName === '') {
//         $errors["name"] = "blank";
//     } elseif (mb_strlen($postName) > 10) {
//         $errors["name"] = "max_length";
//     }
//     $name = $_POST["name"];
// 　　
// }

function validateContent($postContent) {
    if ($postContent === '') {
        return BLANK;
    } elseif (mb_strlen($postContent) > 140) {
        return MAX_LENGTH;
    }
    return "";
}

$errors['content'] = validateContent($_POST['content']);