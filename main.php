<?php

$libs = FFI::cdef(
    "int sum_val(int a, int b);
    int sub_val(int a, int b);", // prototype c function
    "./vector.so"); // path shared libs

echo $libs->sum_val(1, 2) . PHP_EOL;
echo $libs->sub_val(2, 1) . PHP_EOL;

var_dump($libs->addr('sum_val'));
?>