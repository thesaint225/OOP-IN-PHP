<?php
class User
{
    public $username = 'ryu';
    public $email = 'miessanhenri@gmail.com';

    public function addfriend()
    {
        return " $this->email added a new friend";
    }
}
