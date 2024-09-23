<?php


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for($i = 0; $i < count($numbers)/2; $i++) {
    echo $numbers[$i];
}


while($i < count($numbers)/2) {
    echo $numbers[$i];
}

$associativeArray = [
    'student1'=> ['name' => 'Jan'],
    'student2' => ['name' => 'Eva']
];

foreach($associativeArray as $key => $value) {
    // key = student1
    // value = ['name' => 'Jan']
    foreach($value as $name) {
        echo $name;
    }
}


foreach($numbers as $key => $number) {
    echo $key." ".$number;
}