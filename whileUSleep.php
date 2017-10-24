<?php
$Count = 2;
do {
    echo "This count is equal to $Count!<br />";

}while($Count < 2);
// This will always run atleast once but not loop.
?>

<?php

$DayCount = 0;
do{
$DayOfTheWeek = array("Monday","Tuesday","Wednesday"
,"Thursday","Friday","Saturday","Sunday");
echo "$DayOfTheWeek[$DayCount] <br />";
$DayCount++;
}while($DayCount <= 6);

?>

