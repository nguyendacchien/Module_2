<?php


class Node
{
    public $data;
    public $next;


    public function __construct($data, $next)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }

}