<?php
include_once "User.php";
$user=new User('chien','dacchien@gmail.com',2);
echo $user->getInfo()."<br>".$user->getAdmin();