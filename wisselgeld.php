<?php

$tien = floor($argv[1] / 10);
$Rtien = floor($argv[1] % 10);


$vijf = floor($Rtien / 5);
$Rvijf = floor($Rtien % 5);

$two = floor($Rvijf / 2);
$Rtwo = floor($Rvijf % 2);

$one = floor($Rtwo / 1);
$Rone = floor($Rtwo % 1);

if ($Rtien == 5) {
    $two5 = floor($Rtien / 2);
    $Rtwo5 = floor($Rtien % 2);
    echo $two5 . " * 2" . PHP_EOL;
    echo $Rtwo5 . " * 1" . PHP_EOL;
}

if ($tien == 0) {
} else {

    echo $tien . " *  10" . PHP_EOL;
}


if ($vijf == 0 || $Rtien == 5) {
} else {
    echo $vijf . " * 5" . PHP_EOL;
}

if ($two == 0) {
} else {

    echo $two . " * 2" . PHP_EOL;
}


if ($one == 0) {
} else {

    echo $one . " * 1" . PHP_EOL;
}
