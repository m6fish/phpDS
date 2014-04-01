<?php
interface functionList
{
public function get($targetIndex);
public function set($taretIndex, $targetObj);
public function getSize();
public function add($targetObj);
public function insert($insertIndex, $insertTarget);
public function indexOf($targetObj);
public function remove($targetIndex);
}
