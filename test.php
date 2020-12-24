<?php

$arr = array("hello", "world");
echo implode(' ', $arr) . "<br>";


$arr = array("hello" => "x5", "world" => "x6");
print_r(array_keys($arr));

echo "<br>" . password_hash('123456', PASSWORD_BCRYPT);
