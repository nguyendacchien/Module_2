<?php


class BinaryTree
{
    protected $root = null;

    public function isEmpty()
    {
        return is_null($this->root);
    }


    public function traverse()
    {
        echo $this->root->dump();
    }

}