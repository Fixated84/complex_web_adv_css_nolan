<?php
$message = "<br><p></p><br>";
 
include("connect.php");
/*$firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : null);*/
 if($_POST) {
 
 
 $firstname = $_POST['firstname']; 
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];

 
 
$queryadd = "INSERT INTO emaillist (user_ID, firstname, lastname, email)
VALUES (NULL,'$firstname', '$lastname', '$email')";
$updatedb = mysqli_query($con,$queryadd);

 mysqli_close($con);

if ($updatedb) {
 $message = "<br><p class=\"animated bounce\">You have successfully added: " .$firstname . " " . $lastname . " to the mailing list.</p>" ;

 }else{
   $message = "<br><p> Your information could not be added to the mailing list.</p>";

 }
}
?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AllStyle Homes</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
 <link href="../css/animate.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="../css/css3buttons.css" media="screen"> 
 
</head>

<body>
<div class="wrapper">
<!--<header>-->
	 <div class="headerwrapper">
		 <div class="leftheader"><img id="effectimg"  class="displayed" src="../images/logo.png"   alt="AllStyle Homes Logo"></div>
         <div class="rightheader">
         <h2>Contact details:<br>
        255 Serenity Drive <br> 
        Ph: 07 4153 9876<br></h2> 
        </div>
    </div>
		 
<nav>
	 <ul>
	  <li><a href="../index.html">Home</a></li>
	  <li><a href="../pages/about.html">About</a></li>
	  <li><a href="../pages/design.html">Designs</a></li>
      <li><a href="../pages/ourprocess.html">Our Process</a></li>
      <li><a href="../pages/faq.html">FAQ</a></li>
      <li><a href="../pages/testimonials.html">Testimonials</a></li>  
      <li><a href="../pages/contact.html">Contact</a></li>            
     </ul>
			
</nav>
		
		
<!--</header>-->

<!--<section class="cluster cluster-1">-->


<!--content wrapper for mainbar and sidebar-->
 <div class="contentwrapper">
  <div class="mainbar"> 
 <h3>AllStyle Homes Mailing List </h3>   
<br>
<form class="loginform" method="POST">
  <fieldset class="account-info" >
	 
   
     <label>
      Subject:
      <input  type="text"  name="subject" placeholder="Subject" required> 
    </label>
         <label>
      Message:   
     <textarea   name="message" rows="25" cols="53"></textarea>
  </label>
    
     
  </fieldset>
  
    <fieldset class="account-action" >
    <input type="submit" value="Send" name="submit" class="btn left">
  
  
     
  </fieldset>
</form>
<?php
echo  $message;
?>
 


<br><br>
<!--<img class="displayed" src="../images/mailinglist.png"  alt="mailing list image" >-->
</div>
  
  
  <div class="sidebar"> <br>

  
 <br>


 
 <a  href="https://greatstartgrant.osr.qld.gov.au/" target="_blank" ><img  class="displayed" src="../images/grant.png" alt="New Start Grant" height="130" width="180">  </a>
     

      <a  href="../design.html" ><img class="displayed"  src="../images/340.PNG" alt="Home and Land from $340 per week" height="130" width="180">  </a>  
     
  

     <a  href="../design.html" ><img class="displayed"  src="../images/land.PNG" alt="Home and land from 270000" height="130" width="180">    </a>
    
   

        <a  href="https://greatstartgrant.osr.qld.gov.au/quick-calculate.php" target="_blank" ><img class="displayed"  src="../images/loan.PNG" alt="Loan Calculator" height="130" width="180"></a>     
    </div>
   
  </div>
 
   <div class="footer">  <a href="../pages/privacy.html" >© 2012 AllStyle Homes - Copyright and Privacy Information</a> </div>

  </div>
<!--</section>-->
 
<script>
 
var effectimg = document.getElementById("effectimg");
 

window.onload = function(){
	
 
 effectimg.addEventListener("click", function(){
 effectimg.className = "displayed animated flipInX";
 
 setTimeout(function() {
 effectimg.className = "displayed";	 
 },1500);	 
 
    }	);  
 
 
};
 </script>

</body>
</html>
