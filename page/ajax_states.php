<?php

sleep(1);
$state = ($_POST['state']);
function handelmassage($massage, $class = "success")
{
    echo "<span class='" . $class . "'>" . $massage . "</span>";
    die();
}

if (strlen($state) < 2) {
    handelmassage("مقدارکمتر از 2 می باشد  ", "error");
} else {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $data = [
            'name' => $state,

        ];
        $sql = "INSERT INTO test (name) VALUES (:name)";
        $smtp = $conn->prepare($sql);
        $smtp->execute($data);
        handelmassage("استان $state به درستی ذخیره شد ");
    } catch (PDOException $e) {
        handelmassage($e->getMessage(), "error");
    }

    $conn = null;
}
