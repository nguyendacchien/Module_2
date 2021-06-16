<?php
class Application1{
    private  $name;
    public static  $count=0;


    public function __construct( $name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return 'Application name: '.$this->name;
    }

}

echo "total objects count: ". Application1::$count."<br>";
$app1 = new Application1("App 1");
echo "total objects count: ". Application1::$count."<br>";
$app2 = new Application1("App 2");
echo "total objects count: ". Application1::$count."<br>";
echo $app1.'<br>';
echo $app2.'<br>';
