<?php

// *Ex-1

// Practice one

for($words= 1; $words<=10; $words++){
    echo "Hello World. <br>";
}

// Prcatice two

for( $num=1; $num<=10; $num++){
    echo $num ."<br>";
}

// *Ex-2


// $startYear = 1980;
// $yearTill =2023;
// for( $year =$startYear; $year<=$yearTill; $year++){
//     echo 2024;
// }
?>

<select>
    <?php
    
        $startYear = 1980;
        $yearTill =2023;
        for( $year =$startYear; $year<=$yearTill; $year++){
            echo "<option>$year</option>" ."<br>" ;
        }

    ?>
</select>
<br>

<?php 

// *Ex-3
$number =113;

for( $nam =1; $nam<=10; $nam++){
    $result = $number * $nam;
    echo "$number * $nam =$result <br>";
}

// *Ex-4

$froAry=[
    'tanim',
    23,
    'sipi',
    'cmt',
    3.40
];
$dur = count($froAry);

for( $len =0; $len < $dur; $len++){
    echo $froAry[$len] . "<br>";
}

// *Ex-5

for( $star=1; $star<=20; $star++){
    $starResult = str_repeat('*',$star);
    echo $starResult ."<br>";
}
for( $star=20; $star >=1; $star--){
    $starResult = str_repeat('*',$star);
    echo $starResult ."<br>";  
}

// *Ex-6

$dig = 10;

for( $num=1; $num<=$dig; $num++){
    for($nbr=1; $nbr<=10; $nbr++){
        $result = $num * $nbr;
        echo "$num * $nbr =$result" . "<br>"; 
    }
}

// *Ex-7

$multiAry =[
    [
        "name" => "tanim",
        "age" => "23",
    ],
    [
        "name" => "sahed",
        "age" => "24",
    ],
    [
        "name" => "emon",
        "age" => "25",
    ],
    [
        "name" => "srabon",
        "age" => "22",
    ],
];
$total = count($multiAry);
for( $name=0; $name <$total; $name++){
    echo $multiAry[$name]["name"] . "<br>";
}

// *Ex-8

$forehch =[
    "sipi",
    43,
    "cmt"
];
foreach($forehch as $index => $each){
    echo $index . "-" . $each . "<br>";
}
?>