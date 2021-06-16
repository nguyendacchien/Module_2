<?php


class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function getInfo()
    {
        return 'name: '. $this->name."<br>". 'email: '. $this->email;
    }

    public function getAdmin()
    {
        $result1 = 'Admin';
        $result2='người dùng';
        if ($this->role==1){
            return 'role: '. $result1;
        }else{
            return 'role: '.$result2;
        }
    }


}