<?php

include 'includes/newfile.inc.php'


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $person = new User('mario', 'miessanhenri@gmail.com');
    $person2 = new User('hennri', 'johnemmanuel@gmail.com');
    $person3 = new Admin('miesssan', 'miessanhenri@gmail', 5);
    echo $person3->username . "<br>";
    echo $person3->getEmail() . "<br>";

    echo $person3->levels . "<br>";

    echo $person->role . "<br>";
    echo $person3->role . "<br>";
    echo $person->message() . "<br>";
    echo $person3->message() . "<br>";

    $person4 = clone $person;
    echo $persone4->username;




    $person2->setEmail('henrymiessan@gmail.com');

    echo $person2->getEmail() . '<br>';

    echo $person->getEmail();

    // $pet01 = new Person();
    // echo $pet01->first;


    // $person = new User('miessan', 'blue', 28);
    // echo $person->getname() . "<br>";

    // $person = new User('miessan', 'blue', 29);
    // echo $person->getDA() . "<br>";

    // User::setage(18);
    // echo User::$drinkingAge;


    // print_r(weather::$TempCondition);
    // echo weather::celsiusToFarenheit(20) . '<br>';
    // echo weather::determinTempCondition(54);
















    ?>

</body>

</html>