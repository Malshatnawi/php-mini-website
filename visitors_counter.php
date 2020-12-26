<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors Counter</title>
</head>
<body>
<?php
    session_start();
    

    if(empty($_SESSION["hello"])){
        $_SESSION["hello"]=0;

    }
        $_SESSION["hello"]++;
    

    echo $_SESSION["hello"];

    ?>

    



    
</body>
</html>