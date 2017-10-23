<?php
$Gender = "male";
$Age = 17;
$Risk_factor =
    $Gender == "male" && $Age <= 21;
    // This will return TRUE or 1
($Risk_factor = 1? $return ="TRUE": $return = "FALSE");
echo $return;
?>

<?php
// Next to is XOR (eXclusive OR)

$RightSideSteering = true;
$Country = "England";
$IncorrectSteering = // This will evaluate to true if the condition is met.
// It'll only be true if ONE exclusively is true. 
    $RightSideSteering == true xor $Country == "England";
        echo $IncorrectSteering;
?>

<?php
$TrueValue = true;
$FalseValue = false;
$ReturnValue = ($TrueValue ? "true" : "false");
echo "<p>$ReturnValue<br />";

$ReturnValue = ($FalseValue ? "true" : "false"); 
echo "$ReturnValue<br />"; 

$ReturnValue = ($TrueValue || $FalseValue ? "true" : "false"); 
echo "$ReturnValue<br />"; 

$ReturnValue = ($TrueValue && $FalseValue ? "true" : "false"); 
echo "$ReturnValue<br />"; echo "</p>"; 
?>

