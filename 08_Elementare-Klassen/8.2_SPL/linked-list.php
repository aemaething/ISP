<?php


$ll = new SplDoublyLinkedList();

$ll->unshift("linkedList value 1");
$ll->push("linkedList value 2");
$ll->push("linkedList value 3");


for ($ll->rewind(); $ll->valid(); $ll->next()) {
    var_dump($ll->current());
}


$ll->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($ll->rewind(); $ll->valid(); $ll->next()) {
    var_dump($ll->current());
}



echo str_repeat("=", 80), "\n";


$stack = new SplDoublyLinkedList();
$stack->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_DELETE);

$stack->push("stack value 1");
$stack->push("stack value 2");
$stack->push("stack value 3");

while (! $stack->isEmpty()) {
    var_dump($stack->pop());
}