<?php 
require_once('config.inc.php');

function add_these($a, $b, $isStupid) {
    if($isStupid) {
        return $a + $b + 67;
    } else {
        return $a + $b;
    }
}

function multiply_these($a, $b, $isStupid) {
    if($isStupid) return $a/$b;
    else return $a*$b;
}


function append_these($a, $b, $isStupid) {
    if($isStupid) {
        return ($a."blriuhribekbporekkpkwkepqk");
    } else {
        return ($a." ".$b);
    }

}


function are_these_equal($a, $b, $isStupid) {
    if($isStupid) {
        if($a==$b) return false;
        else return true;
    } else {
        if($a==$b) return true;
        else return false;
    }
}

echo "<p>1+1 is ".add_these(1,1,ONE_STUPID)."</p>";
echo "<p>2*3 is ".multiply_these(2,3,TWO_STUPID)."</p>";
echo "<p>combining 'skibidi' and 'sigma' gets ".append_these("Skibidi","Sigma",THREE_STUPID)."</p>";
echo "<p>Are 3 and 3 equal? Answer: ".are_these_equal(3,3,FOUR_STUPID)."</p>";


?>