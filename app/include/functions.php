<?php

function get_catigories($link) {
    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($link, $sql); 
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}

