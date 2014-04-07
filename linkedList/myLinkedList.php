<?php
include "functionList.php";
include "node.php";

class myLinkedList implements functionList
{
    private $head;
    private $tail;
    private $size;

    public function __construct(){
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function insert($index, $obj){
        
        $node = new node();
        $node->data = $obj;
        
        //get nextItem
        $nextItem = $this->get($index);
        
        //insert
        $node->next = $nextItem->next;
        $node->prev = $nextItem;
        
        $nextItem->next->prev = $node;
        $nextItem->next = $node;
        
        $this->size = 0;
    }
    
    public function addFirst($obj){
        $node = new node();
        $node->data = $obj;

        if(null == $head){
            $node->next = null;
            
            $this->head = $node;
            $this->tail = $node;

            $node->prev = $this->head;
                
            $this->size += 1;
        } else {
            $node->prev = null;
            $node->next = $this->head;
            $this->head->prev = $node;

            $this->head = $node;

            $this->size += 1;
        }
    }

    public function addLast($obj){
        $node = new node();
        $node->data = $obj;
        $node->next = null;

        $this->tail->next = $node;
        $node->prev = $this->tail;
        $this->tail = $node;

        $this->size += 1;
    }

    public function get($index){
         //get nextItem
        $nextItem = $head;
        for($i = 1; $i < $index; $i ++ ) {
            $nextItem = $nextItem->next;
        }

        return $nextItem;
    }
    
    public function getFirst(){
        return $this->head;   
    }

    public function getLast(){
        return $this->tail;
    }
    
    
    public function remove($target){
        echo "remove!\n";
    }
    
    
    public function getSize(){
        return $this->size;
    }

    public function printList(){
        //pass through the List
        $nextItem = $head;

        echo "head:" . $nextItem->data;
        for($i = 1; $i < $this->size; $i ++ ) {
            $nextItem = $nextItem->next;
            echo "/" . $nextItem->data;
        }
        echo "\n";
    }
}


