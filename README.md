# Horoscope
Målet med uppgiften är att bygga ett enkelt REST API för sitt horoskop
https://nawarmohra.com/Horoskop/

Rest definierar fem typer av anrop man kan göra:
GET
läser information
POST lägger upp ny information
PUT skriver över med ny information
PATCH uppdaterar befintlig information
DELETE tar bort information

Filer i projekt: 
addHoroscope.php
viewHoroscope.php
updateHoroscope.php
deleteHoroscope.php

index.html
knapparna ha varsin onClick som kör varsin Javascriptfunktion:
Knapp: "spara mitt horoskop" 
Knapp: "uppdatera mitt horoskop" 
Knapp: "radera mitt horoskop" 
onClick: göra ett anrop via fetch till addHoroscope.php med innehållet i input:en

