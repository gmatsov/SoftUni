<?php

$lane = explode(" ", readline());
$currentNumber = null;
$currentSecc = 1;
$theMostSeq = null;
$theMostNum = null;

for ($i = 1; $i < count($lane); $i++) {
    $currentNumber = $lane[$i - 1];
    if ($currentNumber == $lane[$i]) {
        $currentSecc++;
        if ($theMostSeq < $currentSecc){
            $theMostSeq = $currentSecc;
            $theMostNum = $currentNumber;
        }
    } else {
        $currentSecc = 1;
    }
}
echo str_repeat("$theMostNum ", $theMostSeq);