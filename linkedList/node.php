<?php

class node {
    
    $prev;
    $data;
    $next;

    public function __construct(){
        $argNum = func_num_args();
        $argArr = func_get_args();

        if(1 == $argNum ){
            $this->data = $argArr[0];
        } else if (3 == $argNum ){
            $this->prev = $argArr[0];
            $this->data = $argArr[1];
            $this->next = $argArr[2];
        } else {
            return "wrong arg nums!\n";
        }

    }




    
}
