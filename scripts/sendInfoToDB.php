<?php 
include("connect.php");
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];

 
 
$queryadd = "INSERT INTO emaillist (user_ID, firstname, lastname, email)
VALUES (NULL,'$firstname', '$lastname', '$email')";
$updatedb = mysqli_query($con,$queryadd);

 mysqli_close($con);

 if ($updatedb) {
 echo "<br> You have successfully added: " .$firstname . " " . $lastname . " and the Email: " .$email . " to the mailing list." ;

 }else{
   echo "info could not be added";

 }


 

//if ($con->query($sql) === TRUE) {
  //  echo "<br>New record created successfully <br> You have added the Username: " .$username . " and the Email: " .$email . " to the database." ;
//} else {
   // echo "Error: " . $sql . "<br>" . $con->error;
//}

//$con->close();
 

?>