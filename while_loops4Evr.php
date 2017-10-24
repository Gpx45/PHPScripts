<?php

$FacesNamesSingular = array(" one "," two ", " three ",
 " four "," five "," six ");
$FaceNamesPlural = array(" ones "," twos "," threes "," fours ",
" fives "," sixes ");


function CheckForDoubles($Die1, $Die2, &$Doubles){
    global $FacesNamesSingular;
    global $FaceNamesPlural; // stated global are fine just being
                 // mentioned with no assigned value.
       
    
    if ($Die1 == $Die2){
        $Doubles++;
        echo "The roll was double",
        $FaceNamesPlural[$Die1-1], "<br />";
        
        
    }
    
    else {
        echo "The roll was a ", $FacesNamesSingular[$Die1-1],
        "and a", $FacesNamesSingular[$Die2-1], "<br />";
    }
};

function DisplayScoreText($Score){
    
    switch($Score){

    case ($Score == 3):          
    echo "You rolled a loose deuce!<br />";     
    break;
    case ($Score == 5):          
    echo "You rolled a fever ﬁve!<br />";     
    break;
    case ($Score == 7):          
    echo "You rolled a natural!<br />";     
    break;
    case ($Score == 9):          
    echo "You rolled a nina!<br />";     
    break;
    case ($Score == 11):          
    echo "You rolled a yo!<br />";     
    break;
    default:
    break;
    };    
};
$Doubles = 0;
$RollNumber = 0;
while ($RollNumber <= 5){
    $Dice = array();
    $Dice[0] = rand(1,6);
    $Dice[1] = rand(1,6);
    $Score = $Dice[0] + $Dice[1];
    echo "<p>";
    echo "The total score for the roll $RollNumber was
    $Score <br />";
    CheckForDoubles($Dice[0],$Dice[1], $Doubles);
    DisplayScoreText($Score);
    ++$RollNumber;
}
echo "Doubles occurred ", $Doubles , " rolls</p>";



?>
