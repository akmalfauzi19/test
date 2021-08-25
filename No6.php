<?php

function cari($arr, $word)
{
    $arr2 = str_split($word);

    for ($i = 0; $i < count($arr); $i++) {
        $diferent = array_diff($arr[$i], $arr2);

        if (count($diferent) > 0) {
            print_r('false' . '<br />');
            break;
        } else {
            print_r('true' . '<br />');
            break;
        }
    }
}

$mystring =
    array(
        array('f', 'g', 'h', 'i'),
        array('j', 'k', 'p', 'q'),
        array('r', 's', 't', 'u')
    );

echo cari($mystring, 'fghi') . "\n";

// cari($arr, 'fghi'); // true
// cari($arr, 'fghp'); // true
// cari($arr, 'fjrstp'); // true
