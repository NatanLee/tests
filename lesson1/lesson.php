<?php

//((({{({[{ }]}]}})))

Class MyStack{
    protected $stack;
    protected $limit;

    public function __construct($limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;        
    }

//push
    public function push ($element){
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack, $element);
        }else{
            throw new RuntimeException('Стек переполнен');
        }
    }

//pop
    public function pop (){
        if(!$this->isEmpty()){
           return array_shift($this->stack);
        }else{
            throw new RuntimeException('Стек пустой');
        }
    }
//top
    public function top (){
        reset($this->stack);
        return current($this->stack);
    }
//isEmpty
    public function isEmpty(){
        return empty($this->stack);      
    }
}


// $object = new MyStack();
// $object -> push("Анастасия");
// $object -> push("Надежда");
// $object -> push("Анна");
// //
// print_r($object);
// //$object->pop();
// $object->pop();
// $object->pop();
// echo $object->top();
// print_r($object);
// //$object->pop();

//