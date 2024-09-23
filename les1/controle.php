<?php
$test = "123";

if ($test === 123){

} else if ($test == "456") {

}else{

}

$action = "test3";
// $action == casename
switch($action){
    case "test1":

//        break;
    case "test2":

        break;
    default:

}


if($age <= 18){
    echo "Volwassen";
}else{
    echo "kind";
}

echo ($age <= 18) ? "Volwassen" : "kind";

if(isset($age)){
    echo "dit is de leeftijd: ".$age;
}

echo $age ?? "Geen leeftijd beschikbaar";

