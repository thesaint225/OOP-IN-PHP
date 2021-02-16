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

    $userone = new User;
    $userTwo = new User;

    echo $userone->username . "<br>";
    echo $userone->email . "<br>";
    echo $userone->addfriend();

    echo $useroneTwo->username = "Miesan" . "<br>";
    echo $useroneTwo->email = "Henry" . "<br>";

    echo $useroneTwo->username . "<br>";
    echo $useroneTwo->email . "<br>";
    // echo $useroneTwo->addfriend();



    // print_r(get_class_vars('User')) . '<br>';
    // print_r(get_class_methods('User'));












    ?>

</body>

</html>