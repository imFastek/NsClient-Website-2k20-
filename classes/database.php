<?php
/**
 * @author stevimeister on 15/8/2020
 */
?>
<?php
$host = 'mysql43.mydevil.net';
$database = 'm1141_nsclient';
$user = 'm1141_nsclient';
$password = 'q0xgQZ7EJmxW709qdhZI';

try {
    $mysqlDatabase = new PDO('mysql:host='. $host .';dbname=' . $database, $user, $password);
} catch(PDOException $ex) {
    echo 'SZOO!? Szoś poszło nie tak! '.$ex -> getMessage();
    die();
}
?>

