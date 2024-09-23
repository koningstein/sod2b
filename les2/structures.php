<?php
$age = 18;
if ($age > 17) {
    echo "Je bent volwassen";
} else if($age > 4){
    echo "Je bent kleuter";
} else {
    echo "je bent een baby of peuter";
}

switch($age) {
    case 18: // if ($age == 18)
        echo "Je bent volwassen";

    case 5:
        echo "Je bent kleuter";

        break;
    default: // else
        echo "Je bent een baby of peuter";
}


$age = 20;
echo ($age >= 18) ? "Je bent volwassen" : "Je bent kleuter";
if($age >= 18) {
    echo "Je bent volwassen";
}else{
    echo "Je bent een kleuter";
}

$name = null;
echo $name ?? "niet beschikbaar";