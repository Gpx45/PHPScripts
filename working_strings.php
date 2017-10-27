<?php

$Speaker = "Jamie Bryant";
echo "<p>Et tu Brute!</p>". "</p>". $Speaker;

$City = "Paris";
$Country = "France";
$Destination = "<p>".$City ." is in "
.$Country.".</p>";
echo $Destination;

// You can use .= (combination operator)to combine pieces together
// While you assign strings to it.

$Destination = "<p>Paris";
$Destination .= " is in France</p>";
echo $Destination;
?>

<?php
$MusicalNotes = array("do","re","mi",
"fa","so","la","si");
$Speech = "The following Musical Notes are ";

foreach ($MusicalNotes as $x){
    $Speech .= " ". $x;
};
echo $Speech;
?>