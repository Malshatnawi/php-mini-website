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

    <title>REGISTRATION PAGE</title>
  </head>
  <body class="login_page_body">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-dark container-fluid" id="navbar_all_pages">
  <a class="navbar-brand text-primary text-decoration-none" href="index.php">QUOTES WORLD</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
  <button type="button" class="btn btn-primary m-1"><a class="text-white text-decoration-none" href="login.php">Already have an account?</a></button>
  </div>
</nav>


  
<form class="box" action="" method="post" id="box_register_page">
        <h1>Register | Form</h1>
        <input type="text" name="guname" placeholder="Username">
        <input type="password" name="gpass" placeholder="Password">
        <input type="password" name="gpass2" placeholder="Re-type the Password">
        <input type="text" name="gphone" placeholder="Phone Number">
        <input type="submit" name="gsubmit" value="Register">
    </form>

    <?php



    session_start();

    $copiedusers=$_SESSION["users"];

    // $users_after_deletion=$_SESSION["usersafterdeletion"];

    $phone_numbers=array();
    

    $all_usernames=array();
    //AFTER DELECTION CODE IS HERE AND IN LINE 47
    // if(empty($users_after_deletion)){
    //   foreach($copiedusers as $usernames => $all_data){
    //     $all_usernames[] = $usernames;
    //     foreach($all_data as $data_type => $data_value){
    
    //     }
    //   };

    // }
    // else{
      foreach($users_after_deletion as $usernames => $all_data){
        $all_usernames[] = $usernames;
        foreach($all_data as $data_type => $data_value){
    
        }
      };

    // }

  
  $updatedusers=array();
    
    if(isset($_POST["gsubmit"])){
      if(empty($_POST["guname"]) || empty($_POST["gpass"]) || empty($_POST["gpass2"]) || empty($_POST["gphone"])){
        echo "All Fields Are Required";
      }
      else{
        if(!in_array($_POST["guname"],$all_usernames)){
          if(strlen($_POST["gpass"]) >= 3){
            if($_POST["gpass"]===$_POST["gpass2"]){
              if(strlen($_POST["gphone"])==10){
                $phone_numbers[$_POST["guname"]]=$_POST["gphone"];
                $updatedusers=$_SESSION["returnedusersarray"];
                $updatedusers[$_POST["guname"]]= array ("password" => $_POST["gpass"],"role" => "user");

                $_SESSION["registeredusersarray"] = $updatedusers;
                echo "<pre>";
                print_r($updatedusers);
                echo "</pre>"; 
                           
              }
              else{
                echo "Enter a Valid Phone Number";
              }

            }
            else{
              echo "The passwords did not match";
            }

          }
          else{
            echo "The password must be at least 3 characters";
          }

        }
        else{
          echo "This username is already in use";
        }
      }
    }
   
    if(empty($updatedusers)){
      $updatedusers=$copiedusers;
      $_SESSION["registeredusersarray"] = $updatedusers;
    echo "<pre>";
    print_r($updatedusers);
    echo "</pre>";
    }
    else{
      $_SESSION["registeredusersarray"] = $updatedusers;
      echo "<pre>";
      print_r($updatedusers);
      echo "</pre>";
    }
   
   
    ?>



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