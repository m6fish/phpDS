<?php
include "functionList.php";

class stack implements functionList
{
    //private MaxSize;
    private $length;
    private $dataArr;


    public function __construct()
    {
        $this->length = 0;
        $this->dataArr = array();
    }

    public function isEmpty()
    {
        if (0 == $this->length) {
            return true;
        } else {
            return false;    
        }
    }

    public function peek()
    {
        $top = null;
        if (!$this->isEmpty()) {
            $top = $this->dataArr[$this->length - 1];
        }
        return $top;
    }

    public function pop()
    {
        $top = $this->peek();
        if ($top != null) {
            $this->dataArr[$this->length - 1] = null;
            $this->length -= 1;
        }
        return $top;
    }

    public function push($data){
        $this->dataArr[$this->length] = $data;
        $this->length += 1;
    }

    public function printStack(){
        
        echo "---\n";
        echo "[";

        foreach($this->dataArr as $data){
            echo $data . " ";
        }
        echo "\n";
        echo "---\n";

    }

    public function shift(){
        
    }

    public function delete(){
        
    }

    public function insert($index){
        
    }
}


