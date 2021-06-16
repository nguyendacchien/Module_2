<?php
class Application2
{
    private static Application2 $instance;
    public static function getInstance(): Application2
    {
        if (self::$instance===null){
            self::$instance=new Application2();
            echo 'app1';
        }
        return self::$instance;
    }
}
$app1 = Application2::getInstance();
$app2= Application2::getInstance();
//$app3= new Application2();