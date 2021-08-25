<?php

function NilaiAverage($arr)
{
    $average = array_sum($arr) / count($arr);
    return $average;
}

function NilaiTertinggi($arr)
{
    asort($arr);
    $arr = array_reverse($arr);
    $result = array_slice($arr, 0, 7);

    return json_encode($result);
}

function NilaiTerendah($arr)
{
    asort($arr);
    $result = array_slice($arr, 0, 7);
    return json_encode($result);
}


// input bilangan disini
$bilArray = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);

echo "Nilai Rata-rata = " . NilaiAverage($bilArray) . "\n" . "<br/>";
echo "Nilai Tertinggi = " . NilaiTertinggi($bilArray) . "\n" . "<br/>";
echo "Nilai Terendah = " . NilaiTerendah($bilArray) . "\n" . "<br/>";
