<?php
$normal_arr = array('Sandra', 'Sarah', 'Brittany');
$asso_array = array('Ryan'=>150,'Kyle'=>21.95,'Sean'=>0.99);

// Key is poiting at the index $value is the actual 
// value stored in the current index.
foreach($normal_arr as $key => $value){
    echo $key.$value."<br />";
}

?>