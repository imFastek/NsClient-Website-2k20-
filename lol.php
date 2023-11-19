<?php
/**
 * @author stevimeister on 15/8/2020
 */

require_once 'classes/database.php';

$user = isset($_GET['user']) ? $_GET['user'] : '';


if ($user != '') {
    try {
        $player = $mysqlDatabase->query('SELECT wingsId FROM `nsclient_users` WHERE nickName=' . $user . ';');
    } catch (PDOException $ex) {
        echo "Wystąpił błąd z pobieraniem danych: " . $ex->getMessage();
        die();
    }
    exit($player);
}
else if ($user == "" || $user == null) {
    exit("0");
}








