<?php

$alphabet = array_merge(range('A', 'Z'), range('a', 'z'));
$rumusPola = [1, -2, 3, -4, 5, -6];

$plainText = "DFHKNQ";
echo "Plain Text : " . $plainText . "<br>";
$arrPlainText = str_split($plainText);
$chipherText = '';
$no = 0;
foreach ($arrPlainText as $arr) {
    if (in_array($arr, $alphabet)) {
        $chipherText .= $alphabet[array_search($arr, $alphabet) + $rumusPola[$no]];
        $no++;
        continue;
    }
    $chipherText .= $arr;
}
echo "Cipher Text : " . $chipherText;
