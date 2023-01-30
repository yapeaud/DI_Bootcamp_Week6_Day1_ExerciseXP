<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day1_XP1</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <p><?php echo "Hello World"; ?></p>
    <hr>
    <h1>Exercise 2</h1>
    <?php $greeting = "Hello PHP";?>
    <p><?php echo $greeting ?></p>
    <hr>
    <h1>Exercise 3</h1>
    <?php
    $hi = "Good Morning";
    $day = "Have a nice day!";
    ?>
    <p><?php echo $hi.". ".$day?></p></p>
    <hr>
    <h1>Exercise 4</h1>
    <?php   
    $string = "ERIC";  
    ?>  
    <p><?php echo "Reverse string of $string is " .strrev ( $string );  ?></p>
</body>
</html>