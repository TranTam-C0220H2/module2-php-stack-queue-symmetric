<?php


class Queue
{
    protected $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function isEmpty()
    {
        return count($this->queue) == 0;
    }

    public function enqueue($character)
    {
        array_push($this->queue, $character);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
        return array_shift($this->queue);
        } else {
            throw new Exception('Array is Empty!');
        }
    }
}