<?php
// PERHITUNGAN 

function tambah($a, $b)
{
    $c = $a + $b;
    return $c;
}

echo " 10 + 7 = ".tambah(10,7) . "<br>";


function kurang($a, $b)
{
    $c = $a - $b;
    return $c;
}

echo " 11 - 9 = ".kurang(11,9) . "<br>";

function kali($a, $b, $e = 1)
{
    $c = $a * $b * $e;
    $d = $a.'*'. $b . " * " . $e ." = " . $c . "<br>";
    return $d;
}

echo kali(5,10,4);
echo kali(8,10);

function bagi($a, $b)
{
    $c = $a / $b;
    $d = $a.'/'. $b . " = " . $c . "<br>";
    return $d;
}

echo bagi(20,2);