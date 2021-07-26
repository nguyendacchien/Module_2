<?php
include "ArrayList.php";

$listInteger = new ArrayList('arr');
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
print_r($listInteger->toArray());
echo "<br>".$listInteger->get(1);
