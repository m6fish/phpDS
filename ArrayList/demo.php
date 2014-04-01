<?php
require "myArrayList.php";

$mArrayList = new myArrayList();

echo "Init Size:" . $mArrayList->getSize() . "\n";

echo "add:\n";
$mArrayList->add("a1");
$mArrayList->add("a2");
$mArrayList->add("a3");
$mArrayList->add("a4");
$mArrayList->add("a5");
$mArrayList->outPut();

echo "get 1:" . $mArrayList->get("1") . "\n";
$mArrayList->outPut();

echo "indexOf a4:" . $mArrayList->indexOf("a4") . "\n";
$mArrayList->outPut();

echo "set 3:" . $mArrayList->set(2, "b3") . "\n";
$mArrayList->outPut();

echo "insert C4:" . $mArrayList->insert(3, "C4") . "\n";
$mArrayList->outPut();

echo "remove 4:" . $mArrayList->remove("4") . "\n";
$mArrayList->outPut();
