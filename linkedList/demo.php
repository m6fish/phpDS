<?php
include "myLinkedList.php";

$myList = new myLinkedList();

$myList->printList();

$myList->addFirst("apple");
$myList->printList();

$myList->addLast("cat");
$myList->printList();

$myList->insert(1,"banana");
$myList->printList();


$myList->insert(1,"GMO");
$myList->insert(2,"KKBOX");
$myList->addFirst("DUTY");
$myList->addLast("TIME");
$myList->insert(3,"FUTURE");
$myList->printList();


$myList->remove("apple");
$myList->printList();

