<?php 

$x=4;
$y=12;
function sum(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];

    // echo $z;
    
}
echo $GLOBALS['l'];
sum();
echo $z."<br>";

?>



<?php

echo $_SERVER["QUERY_STRING"];

?>


<a href="superglobals_test.php">GO</a>


<?php

echo $_SERVER["DOCUMENT_ROOT"];

?>



<form action="" method="POST">
    <input name="fname" type="text">
    <input name="btn" type="submit" value="submit">
</form>

<?php
echo $_REQUEST['fname'];

?>




