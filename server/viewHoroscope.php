<?php
session_start();
if(isset($_SERVER['REQUEST_METHOD'])) {
   
    if($_SERVER['REQUEST_METHOD'] === 'GET') {

        if (isset($_SESSION["horoscope"])) {
            $horoscope = unserialize($_SESSION["horoscope"]);
            echo json_encode($horoscope);
        }
    } else {
        echo json_encode("not a Get method");
    }
} else {
    echo json_encode("No valid request");
}
?>