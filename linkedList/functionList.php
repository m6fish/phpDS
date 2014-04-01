<?php
interface functionList{
    public function add($index, $obj);
    public function addFirst($obj);
    public function addLast($obj);
    public function get($index);
    public function getFirst();
    public function getLast();
    public function remove($target);
    public function getSize(); 
}
