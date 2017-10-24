
<?php
// call local variables
function averageNumbers($a, $b, $c){
    $SumOfNumbers = $a +$b + $c;
    $Result =SumOfNumbers / 3;
    return $Result;
};

// Call localy
function IncrementByValue($CountByValue){
    ++$CountByValue;
    echo "<p>IncrementByValue() value is $CountByValue</p>";
};
// Now to call by reference 
function IncrementByReference(&$CountByReference){
    ++$CountByReference;
    echo "<p>IncrementByReference() value is $CountByReference</p>";
};

$Count = 1;
echo "<p>Main program starting value is $Count.</p>";
IncrementByValue($Count); // This only uses it while in the 
//function then $Cout comes back to normal
echo "<p>Main program between value is $Count.</p>";
IncrementByReference($Count); // This simply uses the passed
// argument a reference and makes changes to it that are permanent.
echo "<p>Main program ending value is $Count.</p>";
?>



