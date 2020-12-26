<?php
session_start();
$dashboardusers=$_SESSION["registeredusersarray"];
// if(isset($_SESSION["registeredusersarray"])) {
//                     print_r($dashboardusers);
//                     }
//                     else{
//                     echo "no";
//                     } 

// ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="landing.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="landing.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ADMINS DASHBOARD</title>
  </head>
  <body class="login_page_body">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
  <a class="navbar-brand text-primary text-decoration-none" href="index.php">QUOTES WORLD</a>

  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
  <p class="text-success m-2 text-left">Welcome <?php echo $_SESSION["adminname"];  ?></p>

  <button type="button" class="btn btn-light m-1"><a class="text-dark text-decoration-none" href="register.php">Log out</a></button>
   
  </div>
</nav>
<h1>Registered Users Data </h1>
<?php
// $all_users=array();
// $all_users=$_SESSION["returnedusersarray"];
// if(isset($_SESSION["returnedusersarray"])) {
//     echo "ok";
// }
// else{
//     echo "no";
// }  

// $fakearray=array(
//     "Ahmad"=>array(
//         "password"=>"12345",
//         "role"=>"user"
//     ),
//     "Ali"=>array(
//         "password"=>"123",
//         "role"=>"user"
//     ),
//     "Hashem"=>array(
//         "password"=>"123456",
//         "role"=>"user"
//     ),
//     "Manager"=>array(
//         "password"=>"admin1234567",
//         "role"=>"admin"
//     ),
//     "Yaser"=>array(
//         "password"=>"12345",
//         "role"=>"user"
//     )

// );


// $fakearray2= array("Ahmad", "Ali" , "Hashem", "Manager", "Yaser");

// unset($fakearray["Ahmad"]);
// echo "<pre>";
// print_r($fakearray);
// echo "</pre>";





// if(array_key_exists('btnDelete', $_POST)) { 
//     // echo "Hello";
//     // array_splice($fakearray2,0,1);
//     $elements=count($fakearray2);
//     // foreach($fakearray2 as $usernames => $usersdata){
//         // unset($GLOBALS['fakearray2'[$elements-1]];
//     array_splice($GLOBALS['fakearray2'],0,1);
//     $_SESSION["arrayafterdelete"]= $fakearray2;
//     if(isset($_SESSION["arrayafterdelete"])) {
//         echo "ok";
//     }
//     else{
//         echo "no";
//     }   


//     // print_r($fakearray2);
//     // remove();
// } 

// $fakearray2=$_SESSION["deletionarrayreturned"];






    // print_r($fakearray2);
    // remove();




// function remove(){
//     unset($fakearray2[0]);
//     // echo "hello";
//     // $fakearray2= array("Ahmad", "Ali" , "Hashem", "Manager");
//     // echo $fakearray2[1];

// }


echo "<table style='width:100%' border='2 white'>";
echo "<tr>";
echo "<th>Exercise NO</th>";
echo "<th>"."Output"."</th>";
echo "</tr>";
foreach($dashboardusers as $usernames => $usersdata){
    echo "<tr>";
    echo "<td>".$usernames."</td>";
    echo "<td><a href='deleteusers.php?theusername=$usernames'>Delete</td>";
    echo "</tr>";
}


    echo "</table";

    $_SESSION["usersafterdeletion"]=$dashboardusers;
    // if(isset($_SESSION["usersafterdeletion"])) {
    //                 print_r($dashboardusers);
    //                 }
    //                 else{
    //                 echo "no";
    //                 } 
 ?>






 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

  </body>
</html>