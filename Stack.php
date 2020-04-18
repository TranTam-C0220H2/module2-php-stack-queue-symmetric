<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
    public function isFull() {
        return count($this->stack) == $this->limit;
    }

    public function push($character)
    {
        if (!$this->isFull()) {
            array_push($this->stack, $character);
        } else {
            throw new Exception('Array is full!!');
        }
    }
    public function pop() {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            throw new Exception('Array is empty!!');
        }
    }
}