<?php


class BinaryNode
{
    public $value;    // contains the node item
    public $left;     // the left child BinaryNode
    public $right;    // the right child BinaryNode

    public function __construct($item) {
        $this->value = $item;
        // new nodes are leaf nodes
        $this->left = null;
        $this->right = null;
    }

    public function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            // special case if tree is empty
            $this->root = $node;
        } else {
            // insert the node somewhere in the tree starting at the root
            $this->insertNode($node, $this->root);
        }
    }

    protected function insertNode($node, &$subtree)
    {
        if (is_null($subtree)) {
            // insert node here if subtree is empty
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                // keep trying to insert right
                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {
                // keep trying to insert left
                $this->insertNode($node, $subtree->left);
            } else {
                // reject duplicates
            }

        }
    }


    public function dump()
    {
        if (!is_null($this->left)) {
            $this->left->dump();
        }
        if (!is_null($this->right)) {
            $this->right->dump();
        }
    }
}