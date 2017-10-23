<title>Type Specifier</title>
<p>This is the type specifier table:</p>
<?php 
$Value = 163;
print("<p>\n");
printf("Binary integer: %b<br />\n", $Value);
printf("ASCI character: %c<br />\n", $Value);
printf("Decinal integer: %d<br />\n", $Value);
printf("Unsigned decimal integer : %u<br />\n", $Value);
printf("Floating-point number: %f <br />\n", $Value);
printf("Octal integer: %o<br />\n", $Value);
printf("String: %s<br />\n", $Value);
printf("Lowercase hexidecimal integer: %x<br />\n", $Value);
printf("Uppercase hexidecimal integer: %X<br />\n", $Value);
printf("</p>\n");
?>
<hr />
<p>To specify decimal places just a . and the number of decimal place you want.</p>

<?php
$RetailPrice = 99.5;
$PriceWithTax = $RetailPrice * 1.05;
printf("<p>The original price was $%.2f</p>",
 $RetailPrice);
printf("<p>The price for the item is $%.2f</p>",
$PriceWithTax);
?>

<hr />
<p> You can also pad numbers if you want to show that as well.</p>
<?php
$DisplayValue = sprintf("%07d", 7647); // The 0 is what pads, the 7 is positions in total
echo "<p>You are visitor number ".$DisplayValue." </p>\n";
?>

<hr />
<P> Padding with strings instead of numbers</p>
<?php
$Payment = 4.45;
printf("<p>Pay amount of \$%'*9.2f</p\n>", $Payment);// To pad with characters use '
?>

<hr />
<p>Coverting numbers to strings</p>
<?php
$Payment = 1560;
$Payment = number_format($Payment, 2);
printf("<p>Pay the amount $%s.</p>", $Payment);
?>

<hr />
<p>You can align items to the left (right by default) with -(hyphen)</p>
<?php
$Travel = number_format(647.63, 2);
$Accomodations = number_format(845.2, 2);
$Meals = number_format(83.23, 2);
print("Description      Amount <br />\n");
print("***********************<br />\n");
printf("%-15s %20s\n<br />","Travel", $Travel);
printf("%-15s %20s\n<br />","Accomodations", $Accomodations);
printf("%-15s %20s\n<br />","Meals", $Meals);


// Follow this guide here:  % [+][pad][-][length][.decimal]type

?>
<hr />

