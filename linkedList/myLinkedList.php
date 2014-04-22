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
        $node->next = $nextItem;
        $node->prev = $nextItem->prev;
        
        $nextItem->prev = $node;
        $node->prev->next = $node;
        
        $this->size += 1;

        return $node->data;
    }
    
    public function addFirst($obj){
        $node = new node();
        $node->data = $obj;

        if(null == $this->head){
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
        $nextItem = $this->head;
        for($i = 1; $i <= $index; $i ++ ) {
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

    private function getByData($targetData){
        $targetNode = $this->head;
        
        for ($i =0; $i< $this->size; $i++ ) {
            if($targetData == $targetNode->data){
                break;    
            }
            $targetNode = $targetNode->next;
        }

        return $targetNode;
    }
    
    
    public function remove($targetData){
        $targetNode = $this->getByData($targetData);

        $targetNode->prev->next = $targetNode->next;
        $targetNode->next->prev = $targetNode->prev;

        echo "remove!\n";
        $this->size -=1;
        return $targetNode;
    }
    
    
    public function getSize(){
        return $this->size;
    }

    public function printList(){
        //pass through the List
        $nextItem = $this->head;
        
        if(null == $nextItem){
            echo "No data!\n";
            return false;
        }

        echo "List:" . $nextItem->data;
        for($i = 1; $i < $this->size; $i ++ ) {
            $nextItem = $nextItem->next;
            echo "/" . $nextItem->data;
        }
        echo "\n";
    }
}


