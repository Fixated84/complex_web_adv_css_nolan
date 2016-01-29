 <?php
 session_start();
if (!isset($_SESSION['username'])) {
 header('location:login.php');
}

 include("connect.php");

 
   if($_POST) {
 $email = $_POST['email'];
 
$queryremove = "DELETE FROM emaillist WHERE (`email` = '$email')";	 

  
$updatedb = mysqli_query($con,$queryremove);

 mysqli_close($con);
  
 
   }
 
 if(isset($_GET['logout'])) {
 session_unset(); 

// destroy the session 
session_destroy(); 
header('Location:login.php');
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
 <h3>AllStyle Homes Mailing List Database </h3>   



<table class="maillist">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Remove</th >
<tr>
<?php

include("connect.php");

$query = "SELECT * FROM emaillist WHERE 1";
$result = mysqli_query($con,$query);

 
 while($row = mysqli_fetch_array($result)) :
 
 
 
 $firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
 
echo "<tr id=\"tr1\">";

echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['email']."</td>";
 
 
echo "<td> <input type=\"checkbox\" class=\"remove\" name=\"remove[]\" value=\"\1\" onclick=\"myfunc(this);\" onChange=\"cbChange(this)\"></td>";
 endwhile;
 
 
 
 
?>

</table>


  <!--onsubmit="goToPage(this.url.value);--><br><br>
<FORM class="formcentre" name="something" method="POST">
 
<INPUT type="hidden" name="email" value=""  class="phone">
<INPUT type="submit" value="Remove">


<input name="Button2" type="button"   onClick="window.location.href='admin.php?logout=1'" value="Log Out"/>
</FORM>

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

 
<!--</section>-->
</div>
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
 
 <script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
var btns = document.querySelectorAll('.remove'),
    phone = document.querySelector('.phone');

// looping through the nodelist and attaching eventlisteners
[].forEach.call(btns, function(btn) {
    btn.addEventListener('click', function(event) {
        // fetching the phone number
		
		 
        var selectedPhone = event.target.parentNode.previousSibling.textContent;
        phone.value = selectedPhone; //setting the value 
		//alert(selectedPhone);
    }, false);
});
}//]]>  
 
</script>

<SCRIPT type="text/javascript">
function goToPage(url)
{
var initial = "localhost/scripts/removemail";
var extension = ".php?email=";

document.something.action=initial+extension+url;
}
</SCRIPT>

</body>
</html>
