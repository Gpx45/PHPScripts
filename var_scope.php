
<?php $GlobalVariable = "Global variable"; 
function scopeExample() {
    $LocalVariable = "<p>Local variable</p>";
    echo "<p>$LocalVariable</p>"; // displays                 
                                  // successfully 
}; 
scopeExample(); 
echo "<p>$GlobalVariable</p>"; 
echo "<p>$LocalVariable</p>"; // error message 
                                                                    
?>                                                                  


<?php 

$GlobalVariable = "Global variable"; 

function scopeExample2() {     
    echo "<p>$GlobalVariable</p>"; // error message 
}; 
scopeExample2(); 


function scopeExample3() {
    global $GlobalVariable;     
    echo "<p>$GlobalVariable</p>"; 
    };

    scopeExample3();
// Declaring global variables need to be made sure that
// they are stated where they are needed with a 'global' keyword.

?>