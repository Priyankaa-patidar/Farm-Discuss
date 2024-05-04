<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signuppassword'];
    $cpass = $_POST['signupcpassword'];
    $type = $_POST['type'];

    // check weather this email exist
    $existSql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
       $showError = "Email already in use";
    }
    else{
        if($pass == $cpass){
         $hash = password_hash($pass, PASSWORD_DEFAULT);
         $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `type`, `timestamp`) VALUES ('$user_email', '$hash', '$type', current_timestamp())";
         $result = mysqli_query($conn, $sql);
        
         if($result){
            $showAlert = true;
           header("Location: /forum/index.php?signupsuccess=true"); 
           exit();                          
         }
        }


        else{
            $showError = "Password do not match";
        }
    }
   
}


if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }

 // header("Location: /forum/index.php?signupsuccess=false&error=$showError");  
  ?>