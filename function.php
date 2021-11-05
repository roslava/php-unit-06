<?php

function t1($a, $b)
{
    global $out1;
    $out1 = $a + $b;
    echo $out1;
}

function t2($a, $b)
{
    return $a + $b;

}

function t3($a, $b)
{
    return $a * $b;
}

function t4($str)
{
    return trim($str);
}

function t5($a)
{
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}

function t6($a)
{
    if (mb_strlen($a) >= 6) {
        return 1;
    }
    return 0;
}

function t7($a)
{
    return date("Y") - $a;
}

function t8($s)
{
    $s = preg_replace('/\s+/', '_', $s);
    return date("Y") . " " ."&copy;" . " " . $s;
}