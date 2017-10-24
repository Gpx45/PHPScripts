
<?php

$FastFood = array(" hot dog "
,"hamburger"," anal fudge "," poon "," cigarrettes ");

for ($Count = 0; $Count < 5; $Count++){
    $FastFood[$Count];
    echo "$FastFood[$Count] <br />";
}

// Foreach

$DaysOfTheWeek = array("Monday","Tuesday","Wednesday",
"Thursday","Friday","Saturday","Sunday");

foreach ($DaysOfTheWeek as $Days){
    echo " <br />$Days";
}
// A more advanced method that can retruves both value and
// array element of the array.

foreach ($DaysOfTheWeek as $x => $y ){
    echo "$x on $y <br />";
// $x is the index location
// $y is the value in that index

}
?>
