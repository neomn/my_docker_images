<?php

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t){

        $sParts = str_split($s);
        $tParts = str_split($t);

        sort($sParts);
        sort($tParts);
        $s = implode($sParts);
        $t = implode($tParts);

        return strcmp($s, $t) === 0;
    }
}