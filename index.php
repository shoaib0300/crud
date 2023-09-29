<?php
include 'includes/newClass.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


    $manager = new Manager("Shoaib", "25", "235");
    $Employee = new employee("Ali", "28", "235");

    $manager->info();
    $Employee->info();

?>

</body>
</html>