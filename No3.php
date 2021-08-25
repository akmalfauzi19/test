<?php

function Unigram1($str_input)
{
    //unigram
    $str = explode(" ", $str_input);
    $unigram = '';
    foreach ($str as $kata) {
        $unigram .= $kata . ", ";
    }
    $unigram = substr($unigram, 0, -2);


    //bigram
    $a = 0;
    $bigram = '';
    foreach ($str as $kata) {
        if ($a < 1) {
            $bigram .= $kata . ' ';
            $a++;
        } else {
            $bigram .= $kata . ', ';
            $a = 0;
        }
    }
    $bigram = substr($bigram, 0, -2);

    //trigram
    $y = 0;
    $trigram = '';
    foreach ($str as $kata) {
        if ($a < 2) {
            $trigram .= $kata . ' ';
            $a++;
        } else {
            $trigram .= $kata . ', ';
            $a = 0;
        }
    }
    $trigram = substr($trigram, 0, -2);

    $result =  "unigram : " . $unigram . "\n";
    $result .=  "bigram : " . $bigram . "\n";
    $result .=  "trigram : " . $trigram . "\n";
    return $result;
}

echo Unigram1('Jakarta adalah ibukota negara Republik Indonesia') . "\n";
