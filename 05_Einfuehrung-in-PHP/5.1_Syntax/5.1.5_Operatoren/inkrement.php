<?php

// inkrement postfix
$a = 4;
echo $a, "\n";
// 4
echo $a++, "\n";    // Verhält sich anders als ...
// 4
echo $a, "\n";
// 5


// inkrement prefix
$a = 4;
echo $a, "\n";
// 4
echo ++$a, "\n";    // dieser hier.
// 5
echo $a, "\n";
// 5


// dekrement postfix
$a = 4;
echo $a, "\n";
// 4
echo $a--, "\n";    // Verhält sich anders als ...
// 4
echo $a, "\n";
// 3


// dekrement prefix
$a = 4;
echo $a, "\n";
// 4
echo --$a, "\n";    // dieser hier.
// 3
echo $a, "\n";
// 3