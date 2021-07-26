<?php


class ReadingList
{
protected array $stack;
protected int $limit;


    public function __construct(int $limit=10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item): void
    {
        if (count($this->stack)<$this->limit){
            array_unshift($this->stack,$item);
        }else{
            throw new RuntimeException('stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            throw new RuntimeException('stack is empty');
        }else{
            return array_pop($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function getStack()
    {
        return $this->stack;

    }

}