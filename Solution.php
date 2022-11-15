<?php

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $sParts = str_split($s);
        $tParts = str_split($t);

        sort($sParts);
        sort($tParts);
        return implode($sParts) . implode($tParts);
    }
}

$solution = new Solution();
echo($solution->isAnagram('abcdfrg','zyxw'));