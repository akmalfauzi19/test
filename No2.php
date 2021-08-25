<?php
function HurufKecil($str)
{
    $upper_case = strtoupper($str);
    $similar = similar_text($str, $upper_case);
    return strlen($str) - $similar;
}

$str = "TranSISI";

echo $str . " " . "Mengandung " . HurufKecil($str) . " buah huruf kecil" . "\n" . "<br/>";
