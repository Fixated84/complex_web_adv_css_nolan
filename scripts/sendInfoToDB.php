<?php 
include("connect.php");
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];

 
 
$queryadd = "INSERT INTO emaillist (user_ID, fullname, email)
VALUES (NULL,'$fullname', '$email')";
$updatedb = mysqli_query($con,$queryadd);

 mysqli_close($con);

 if ($updatedb) {
 echo "<br>New record created successfully <br> You have added the Username: " .$fullname . " and the Email: " .$email . " to the database." ;

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