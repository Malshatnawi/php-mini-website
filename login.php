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

    <title>LOGIN PAGE</title>
  </head>
  <body class="login_page_body">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid">
  <a class="navbar-brand text-primary text-decoration-none" href="index.php">QUOTES WORLD</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
  <button type="button" class="btn btn-primary m-1"><a class="text-white text-decoration-none" href="register.php">Not a User?</a></button>
   
  </div>
</nav>

<!-- <?php
// $users=array(
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


// $all_usernames=array();
// foreach($users as $usernames => $all_data){
//     $all_usernames[] = $usernames;
//     foreach($all_data as $data_type => $data_value){

//     }
// };

// // echo "<pre>";
// // print_r($all_usernames);
// // echo "</pre>";


// $username = $_POST['uname'];
// $password = $_POST['pass'];
// $submit_form=$_POST["usubmit"];

// if(empty($username) && empty($password)){
//     echo "All Fields Are Required";
// }
// else{
//     if(in_array($username,$all_usernames)){
//         if($password==$users["$username"]["password"]){
//             if($users["$username"]["role"]=="admin"){
//                 header("Location: admin_page.php");
//             }
//             else{
//                 header("Location: users_welcome_page.php");
    
//             }
    
//         }
//         else{
//             echo "Invalid Password";
//         }
//     }
//     else{
//         echo "Invalid Username";
//     }
// }
?> -->
<form class="box" action="" method="post">
        <h1>Login | Form</h1>
        <input type="text" name="uname" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="usubmit" value="LOGIN">
        <div><p class="err_msgs">
    <?php

session_start();


$users=array(
    "Ahmad"=>array(
        "password"=>"12345",
        "role"=>"user"
    ),
    "Ali"=>array(
        "password"=>"123",
        "role"=>"user"
    ),
    "Hashem"=>array(
        "password"=>"123456",
        "role"=>"user"
    ),
    "Manager"=>array(
        "password"=>"admin1234567",
        "role"=>"admin"
    ),
    "Yaser"=>array(
        "password"=>"12345",
        "role"=>"user"
    )

);


$all_usernames=array();

foreach($users as $usernames => $all_data){
    $all_usernames[] = $usernames;
    foreach($all_data as $data_type => $data_value){

    }
};
// foreach($users as $usernames => $all_data){
//     $all_usernames[] = $usernames;
//     foreach($all_data as $data_type => $data_value){

//     }
// };

// echo "<pre>";
// print_r($all_usernames);
// echo "</pre>";


// $username = $_POST['uname'];
// $password = $_POST['pass'];
// $submit_form=$_POST["usubmit"];
// $updatedusers=array();
// $updatedusers=$users;
// $updatedusers=$_SESSION["registeredusersarray"];

$_SESSION["users"] = $users;



// if(isset($_SESSION["users"])) {
//     echo "ok";
// }
// else{
//     echo "no";
// }   


// $_SESSION["usersarray"] = $users;
// $_SESSION["allusernames"]=$all_usernames;

$updatedusers=$_SESSION["registeredusersarray"];

    //AFTER DELECTION CODE IS HERE 


// $updatedusers_afterdeletion=$_SESSION["usersafterdeletion"];

foreach($updatedusers_afterdeletion as $usernames => $all_data){
    $all_usernames[] = $usernames;
    foreach($all_data as $data_type => $data_value){

    }
};

$_SESSION["returnedusersarray"] =$updatedusers;





// if(isset($_SESSION["returnedusersarray"])) {
//     echo "ok";
// }
// else{
//     echo "no";
// }   

if(isset($_POST["usubmit"])){
    if(empty($_POST['uname']) || empty($_POST['pass'])){
        echo "All Fields Are Required"; 
    }
    else{
        if(in_array($_POST['uname'],$all_usernames)){
            if($_POST['pass']==$updatedusers[$_POST['uname']]["password"]){
                if($updatedusers[$_POST['uname']]["role"]=="admin"){
                    $_SESSION["adminname"]=$_POST['uname'];
                    // if(isset($_SESSION["adminname"])) {
                    // print_r($users);
                    // }
                    // else{
                    // echo "no";
                    // } 
                    header("Location: admin_page.php");
                    

                }
                else{
                    $_SESSION["usersnames"]=$_POST['uname'];
                    if(isset($_SESSION["usersnames"])) {
                    echo "ok";
                    }
                    else{
                    echo "no";
                    } 
                    header("Location: users_welcome_page.php");
        
                }
        
            }
            else{
                echo "Invalid Password";
            }
        }
        else{
            echo "Invalid Username";
        }
    }

}




// $_SESSION["usersarray"] = $users;
// $_SESSION["allusernames"]=$all_usernames;

// $users=$_SESSION["registeredusersarray"];


// if(isset($_SESSION["registeredusersarray"])) {
//     echo "ok";
// }
// else{
//     echo "no";
// }   



?>

</p>
    </div>
    </form>
    

<!-- <?php
// echo "<pre>";
// print_r($users);
// echo "</pre>";


?> -->




</div>
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
</nav>
  </body>
</html>