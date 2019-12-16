<?php
session_start();
require("./horoskopList.php");

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST['date'])) {

            if (isset($_SESSION["horoscope"])) {
                $horoscope = getHoroscope($_POST['date']); 
                $_SESSION["horoscope"] = serialize($horoscope);           
                echo json_encode(true);
                exit;
            } else {
                echo json_encode(false);
                exit;
            }

        } else {
            echo json_encode("Felaktiga Värden");
        }

    } else {   
        echo json_encode("inte en POST metod");
        exit;
    }

} else {
    echo json_encode("Ingen giltig begäran");
    exit;
}
?>