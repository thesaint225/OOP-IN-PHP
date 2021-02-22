<?php
// class User
// {
//     private $name;
//     public $eyecolor;
//     public $age;

//     public static $drinkingAge = 28;

//     public function __construct($name, $eyecolor, $age)
//     {
//         $this->name = $name;
//         $this->eyecolor = $eyecolor;
//         $this->$age = $age;
//     }
//     public function setname($name)
//     {
//         $this->name = $name;
//     }

//     public function getDA()
//     {
//         return self::$drinkingAge;
//     }
//     public static function setAge($newDA)
//     {
//         self::$drinkingAge = $newDA;
//     }
// }

class User
{

    public $username;
    protected $email;
    public $role = "menber";

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct()
    {
        echo " the username $this->username was removed .'<br>' ";
    }

    public function __clone()
    {
        $this->username = $this->username . '(cloned)' . '<br>';
    }

    public function addFriend()
    {
        return "$this->email added a new friend";
    }

    public function message()
    {
        return "$this->email sent you a new message";
    }


    // getters
    public function getEmail()
    {
        return $this->email;
    }

    // setters

    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class Admin extends User
{
    public $levels;
    public $role = "admin";

    public function __construct($username, $email, $levels)
    {
        $this->levels = $levels;
        parent::__construct($username, $email);
    }

    public function message()
    {
        return "$this->email , an admin,sent you a new message";
    }
}



// class Person
// {
//     public $first = "Henry";
//     protected $last = "jean";
//     private $age = "28";
// }

// class Pet extends Person
// {
//     public function owner()
//     {
//         $a = $this->first;
//         return $a . '<br>';
//     }
// }    

// class weather
// {
//     public static $TempCondition = ['cold', 'mild', 'warm'];

//     public static function celsiusToFarenheit($c)
//     {
//         return $c * 9 / 5 + 32;
//     }
//     public static function determinTempCondition($f)
//     {
//         if ($f < 40) {
//             return self::$TempCondition[0];
//         } else if ($f < 70) {
//             return self::$TempCondition[1];
//         } else {
//             return self::$TempCondition[2];
//         }
//     }
// }
