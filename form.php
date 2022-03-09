<?php
if (isset($_POST["name"]) && isset($_POST["address"])) {
    var_dump($_POST);

    $result = array(
        'name' => $_POST["name"],
        'address' => $_POST["address"]
    );

    file_put_contents('people.txt', $result['name'] . ' - ' . $result['address'] . "\n", FILE_APPEND | LOCK_EX);
}