<?php

// $libs = FFI::cdef(
//     "int sum_val(int a, int b);
//     int sub_val(int a, int b);", // prototype c function
//     "./vector.so"); // path shared libs

$libs = FFI::cdef(
    file_get_contents("./vector.h"),
    "./vector.so"
);

echo $libs->sum_val(1, 2) . PHP_EOL;
echo $libs->sub_val(2, 1) . PHP_EOL;

var_dump($libs);
?>