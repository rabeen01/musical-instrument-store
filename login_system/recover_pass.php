<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $query = mysqli_query($con,$emailquery);

   $emailcount = mysquli_num_rows($query);
   if (emailcount>0){
   		$userdata = mysquli_fetch_array($query);


   		$username =$userdata['username'];
   		$token =$userdata['token'];

   		$subject = "Password Reset";
   		$body = "Hi, $username. Click here to reset your password 
   		http://localhost/1emailverifregister/recover_pass.php?token=$token ";
   		$sender_mail = "from:bestcoderinthewor1d@gmail.com";


   		 if(mail($email, $subject, $body,$sender_email)){
   		 	$_SESSION['msg'] = "check your mail to reset your password $email ";
   		 	header('location:login_form.php');
   		 }else{
   		 	echo "Email sending failed...";
   		 }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>recover password</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>recover password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     
      <input type="email" name="email" required placeholder="enter email or phone">     
      <input type="submit" name="submit" value="Reset password" class="form-btn">
      <p>already have an account? <a href="login_form.php">Click Here</a></p>
   </form>

</div>

</body>
</html>