<?php
$SpeedLimitMiles = "55 mph";
$SpeedLimitKiliometers = (int) $SpeedLimitMiles * 1.6;
echo "$SpeedLimitMiles is equals to
$SpeedLimitKiliometers kph";

// remenber to just place to type casting before the variable
// PHP typically does this automatically but its crucial of validation
// so remenber

echo "<br />";
$SpeedLimitMiles = "55 mph";
settype($SpeedLimitMiles, "integer");
$SpeedLimitKiliometers = $SpeedLimitMiles * 1.6;
echo "$SpeedLimitMiles is equals to
$SpeedLimitKiliometers kph";
?>

<?php
// you can also test for datatypes
// gettype()
// or the 15 is_*()
echo "<br />";
$MortgageRate = .0575; 
$Result = ((is_double($MortgageRate)) ? 
    "The variable contains a decimal number." :     
    "The variable does not contain a decimal number."); 
    echo $Result; 
// Slight modification

echo "<br />";
$SpeedLimitMiles = "55 mph";
$SpeedLimitKiliometers = (is_int($SpeedLimitMiles)) ?
$SpeedLimitMiles * 1.6 : (int) $SpeedLimitMiles * 1.6;
echo "$SpeedLimitMiles is equal to $SpeedLimitKiliometers kph";
// We ran a condition statement that easily and quick

// Check book pages 165 for the precendence rules.

?>

