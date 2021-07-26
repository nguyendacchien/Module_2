<?php
include "Node.php";
include_once "LinhkList.php";


$linkedList = new LinhkList();

$linkedList->insertFirst(1);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNode();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode('-', $linkData);
