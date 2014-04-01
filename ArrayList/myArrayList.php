<?php
require "functionList.php";
class MyArrayList implements functionList
{
    private static $INTIAL_CAPACITY = 10;
    private $dataArray = array();
    private $size = 0;
    private $capacity = 10;

    private function doubleCapacity()
    {
        $this->capacity *= 2;
    }

    public function getSize(){
        return $this->size;
    }

    public function checkOutOfRange($index){
        if($index < 0 || $index >= $this->size){
            return "ERROR Index out of range!\n";
        }
    }


    public function add($targetObj){
        if($this->capacity == $this->size){
            $this->doubleCapacity();
        }
        $this->dataArray[$this->size] = $targetObj;
        $this->size ++;
        
        return true;
    }

    public function insert($insertIndex, $targetObj){
        echo $this->checkOutOfRange($insertIndex);
        
        if($this->capacity == $this->size){
            $this->doubleCapacity();
        }
        //Shift data
        for($arrayIndex = $this->size; $arrayIndex > $insertIndex; $arrayIndex--){
            $this->dataArray[$arrayIndex] = $this->dataArray[$arrayIndex - 1];
        }
        //Insert the new Item 
        $this->dataArray[$insertIndex] = $targetObj;
        $this->size++;
    }

    public function get($targetIndex){
        echo $this->checkOutOfRange($targetIndex);

        return $this->dataArray[$targetIndex];
    }
        
    public function set($targetIndex, $newValue){
        echo $this->checkOutOfRange($targetIndex);
        
        $oldValue = $this->dataArray[$targetIndex];
        $this->dataArray[$targetIndex] = $newValue;

        return $oldValue;
    }

    public function remove($targetIndex){
        echo $this->checkOutOfRange($targetIndex);
        
        $oldValue = $this->dataArray[$targetIndex];
        //Shift data
        for($arrayIndex = $targetIndex; $arrayIndex < $this->size - 1; $arrayIndex ++){
            $this->dataArray[$arrayIndex] = $this->dataArray[$arrayIndex + 1];
        }
        $this->size --;
        return $oldValue;
    }
    
    public function indexOf($targetObj){
        if(in_array($targetObj, $this->dataArray) ){
            return array_search($targetObj, $this->dataArray);
        } else {
          return "Error! There is NOT this object!\n";
        }
    }

    public function outPut(){
        echo "----Now ArrayList----\n";
        for($index = 0; $index < $this->size; $index ++){
            echo $index . " : " . $this->dataArray[$index] . "\n";
        }
        echo "---------------------\n";
    }
}
