<?php

function isJson($string) {
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
}

if (isJson(key($_POST))) {

    $result = json_decode(key($_POST), true);
    if (!empty($result["name"]) &&
        !empty($result["password"]) &&
        !empty($result["password2"]) &&
        !empty($result["mail"]) &&
        !empty($result["city"]) &&
        !empty($result["link"])
    )
    {
        echo 'Success!';
    }
    else {
        echo "error: some attributes do not arrived. You send keys: " . implode(",", array_keys ($result)) .
        ' ||||||||||||||||| end your data: ' . implode(",", $result);
    }
} else {
    echo 'Nastya, please, make you data as json format :)';
}