<?php 
require_once('config.inc.php');

function add_these_wrap($a, $b) {
    return add_these( $a, $b, ONE_STUPID);
}

function multiply_these_wrap($a, $b) {
    return multiply_these( $a, $b, TWO_STUPID);
}

function append_these_wrap($a, $b) {
    return append_these( $a, $b, THREE_STUPID);
}

function are_these_equal_wrap($a, $b) {
    return are_these_equal( $a, $b, FOUR_STUPID);
}

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

echo "<p>1+1 is ".add_these_wrap(1,1)."</p>";
echo "<p>2*3 is ".multiply_these_wrap(2,3)."</p>";
echo "<p>combining 'skibidi' and 'sigma' gets ".append_these_wrap("Skibidi","Sigma")."</p>";
echo "<p>Are 3 and 3 equal? Answer: ".are_these_equal_wrap(3,3)."</p>";


?>