<?php
function isPalindrome($value)
{
    $reversed = strrev($value);
    if ($value == $reversed) {
        return true;
    }
    return false;
}
var_dump(isPalindrome('racecar')); // bool(true)