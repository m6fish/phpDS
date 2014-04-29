<?php
include "myStack.php";

$myStack = new stack();

echo $myStack->peek();

$myStack->push("1");
$myStack->push("2");
$myStack->push("3");
$myStack->push("4");
$myStack->push("5");
$myStack->push("6");
$myStack->push("7");
echo $myStack->peek();

