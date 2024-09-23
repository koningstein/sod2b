<?php

//
//for ($i = 1; $i <= 10; $i++) {
//    $counter++;
//    echo $counter;
//}

$counter = 10;
while ($counter < 10) {
    $counter++;
    echo $counter;
}

do{
    $counter++;
    echo $counter;
}while($counter < 10);

$arrayItems = [1,2,3,4,5];
foreach($arrayItems as $arrayItem){
    echo $arrayItem;
}

for($i = 0; $i < count($arrayItems); $i++){
    echo $arrayItems[$i];
}