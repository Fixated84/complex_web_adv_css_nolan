function chpic(pic){


var filez = pic;
var newtitle
	
if( filez == "../images/designs/property1.jpg" ){	
	
   newtitle =  "Moreton&nbsp;130&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
   
}else if (filez == "../images/designs/property2.jpg"){ 

   newtitle =  "Moreton&nbsp;134&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
   
   }else if (filez == "../images/designs/property3.jpg"){ 
   
      newtitle =  "Whitsunday&nbsp;138&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	   }else if (filez == "../images/designs/property4.jpg"){ 
   
      newtitle =  "Sorrento&nbsp;145&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	   }else if (filez == "../images/designs/property5.jpg"){ 
   
      newtitle =  "Maquarie&nbsp;147&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	   }else if (filez == "../images/designs/property6.jpg"){ 
   
      newtitle =  "Sorrento&nbsp;151&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Study&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	   }else if (filez == "../images/designs/property7.jpg"){ 
   
      newtitle =  "Maquarie&nbsp;151&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property8.jpg"){ 
   
      newtitle =  "Alice&nbsp;152&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property9.jpg"){ 
   
      newtitle =  "Jodie&nbsp;154&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property10.jpg"){ 
   
      newtitle =  "Brook&nbsp;162&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property11.jpg"){ 
   
      newtitle =  "Halifax&nbsp;162&nbsp;-&nbsp;4&nbsp;Bedrooms&nbsp;1&nbsp;Bathrooms&nbsp;1&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property12.jpg"){ 
   
      newtitle =  "Jodie&nbsp;163&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;2&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property13.jpg"){ 
   
    newtitle =  "Sorrento&nbsp;165&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Study&nbsp;1&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
	  
	  	   }else if (filez == "../images/designs/property14.jpg"){ 
   
     newtitle =  "Sorrento&nbsp;165&nbsp;-&nbsp;3&nbsp;Bedrooms&nbsp;1&nbsp;Study&nbsp;2&nbsp;Bathrooms&nbsp;2&nbsp;Garage";
}	
document.getElementById('map').innerHTML =  '<a onclick="return false;" class="hovertext" href="" title1=' + newtitle + '> <img class="propertys" border=0  src=' + pic + '>';

} 

 
 function chpic2(pic){
document.getElementById('map').innerHTML = '<img class="propertys" border=0  src=' + pic + '>';
}
