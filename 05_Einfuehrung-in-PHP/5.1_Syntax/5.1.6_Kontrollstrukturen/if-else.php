<?php

$exprA = true;
$exprB = false;

$valueA = "some string";
$valueC = 0;

function doSomeTest($value1, $value2)
{
// ... some magic testing
return true;
}


if ($exprA) {
echo "'exprA' ist true!\n";
}
// 'exprA' ist true!

if ($exprA && $exprB) {
echo "'exprA' und 'exprB' sind true\n";
} else {
echo "'exprA' oder 'exprB' (oder beide) sind false\n";
}
// 'exprA' oder 'exprB' (oder beide) sind false

if ($valueA) {
echo "'valueA' wird als true interpretiert\n";
}
// 'valueA' wird als true interpretiert

if (!$valueC) {
echo "'valueC' wird als false interpretiert\n";
}
// 'valueC' wird als false interpretiert

if ($valueC === 0) {
echo "'valueC' ist STRICT 0 (und der Vergleich ist damit true)\n";
}
// 'valueC' ist STRICT 0 (und der Vergleich ist damit true)

if (doSomeTest(1, 2)) {
echo "'doSomeTest()' ergibt: true";
}
// 'doSomeTest()' ergibt: true