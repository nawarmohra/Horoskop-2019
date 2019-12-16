<?php
function getHoroscope($inputDate) {
    $horoscope = array(
        "Vattumannen" => "01:20:02:18",

        "Fiskarna" => "02:19:03:20",
    
        "Väduren" => "03:21:04:19",
    
        "Oxen" => "04:20:05:20",
    
        "Tvillingarnan" => "05:21:06:21",
    
        "Kräftan" => "06:22:07:22",
    
        "Lejonet" => "07:23:08:22",
    
        "Jungfrun" => "08:23:09:22",
    
        "Vågen" => "09:23:10:22",
    
        "Skorpionen" => "10:23:11:21",
    
        "Skytten" => "11:22:12:21",
    
        "Stenbocken" => "12:22:01:19",            
    ); 
    $inputDateMnth = (int)substr($inputDate,5,7);
    $inputDateD = (int)substr($inputDate,8,10);

    foreach ($horoscope as $key => $value) {
        
        
        error_log("KEY: " . $key);
        error_log("VALUE: " . $value);


        $arr = explode(":", $value);
 
        $fromMonth = (int)$arr[0];
        $fromDate= (int)$arr[1];
        $toMonth = (int)$arr[2];
        $toDate = (int)$arr[3];
            
        if($fromMonth === $inputDateMnth && $fromDate <= $inputDateD ||  $toMonth === $inputDateMnth && $toDate >= $inputDateD){
            return $key;
        }
    }
}