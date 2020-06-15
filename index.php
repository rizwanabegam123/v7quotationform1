<!DOCTYPE html>
<html lang="en">
<head>
	<title>v7 quotation form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
  <style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<script type="text/javascript">
	    function validate(name,phone,Websitetype,Contentwriting,HostingServices,LogoDesign,WebsiteRequiredin,WebpageRequired){
	    	if(name==null||name==""){
	    		alert("Name is required");
	    		return false;
	    	  }
	        if(phone==null||phone==""){
	        	alert("phone number is required");
	        	return false;
	          }
	        
	           if(phone.length<10)
	          {
	          	
	          	alert("phone number should contain 10 digit");
	          	return false;
	          }
	          if((phone.charAt(0)!=9)&&(phone.charAt(0)!=8)&&(phone.charAt(0)!=7)&&(phone.charAt(0)!=6))
	          { 
	          	alert('phone number should start with  6,7,8,9');
	          	return false;
	          }
	          
	          else{
	          	msgbox(Websitetype,Contentwriting,HostingServices,WebsiteRequiredin,LogoDesign,WebpageRequired);
	          }
	       }
	    
</script>	

<script type="text/javascript"> 
    	function msgbox(Websitetype,Contentwriting,HostingServices,WebsiteRequiredin,LogoDesign,WebpageRequired){

    	              if(Websitetype=='Basic'){
    	              	if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
    	              		 alert("Your requirements has been analysed and the pricing for your website is 3999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
    	              	}
    	              	
	    	             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	             	alert("Your requirements has been analysed and the pricing for your website is 4499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              alert("Your requirements has been analysed and the pricing for your website is 4999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }

	    	               else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	                   alert("Your requirements has been analysed and the pricing for your website is 5999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");	    	        
	    	               }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 4999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
                          else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              } 
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 7299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 4799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else {
    	              		alert("Your requirements has been analysed and the pricing for your website is 7299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
    	              }
    	           else if(Websitetype=='Advanced'){
    	              	if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
    	              		alert("Your requirements has been analysed and the pricing for your website is 7999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
    	              	}
    	              	
	    	             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 8499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 8999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	               else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 8499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
                          else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 11,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 8799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else {
    	              		alert("Your requirements has been analysed and the pricing for your website is 11,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
    	              }
    	               else{
    	              	if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
    	              		alert("Your requirements has been analysed and the pricing for your website is 14,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
    	              	}
    	              	
	    	             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 15,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 15,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	               else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
                          else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 18,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 15,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
	    	              	alert("Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
	    	              else {
    	              		alert("Your requirements has been analysed and the pricing for your website is 18,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com");
	    	              }
    	              }
    	}              
</script>
</head>
</head>
<body>
      <marquee>Fill in the form and get instant quotation for your website</marquee>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="insert.php" method ="post">
	
	<span class="contact100-form-title">
	<img src="images\logo2.jpg" alt="" align="center" width= "100px " height= "100px" />
           </span>
				<span class="contact100-form-title">
					Send Us Your Information
				</span>
				
				<label class="label-input100" for="name">Tell us your name *</label>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="email">Enter your email</label>
				<div class="wrap-input100 " >
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="phone">Enter phone number*</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid Phone number required">
					<input id="phone" class="input100" type="tel" name="phone" placeholder="00000 00000">
					<span class="focus-input100"></span>
				</div>
                <label class="label-input100" for="Website Type">Website Type*</label>
                <div class="wrap-input100">
               <div class="wrap-contact3-form-radio"><br>
						<div class="contact3-form-radio m-r-42"><br>
							<input class="input-radio3" id="radio1" type="radio" name="Websitetype" value="Basic" checked="checked">
							<label class="label-radio3" for="radio1">
								Basic
							</label>
						</div>
						<div class="contact3-form-radio"><br>
							<input class="input-radio3" id="radio2" type="radio" name="Websitetype" value="Advanced">
							<label class="label-radio3" for="radio2">
								Advanced
							</label>
						</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<div class="contact3-form-radio"><br>
							<input class="input-radio3" id="radio3" type="radio" name="Websitetype" value="E-Commerce">
							<label class="label-radio3" for="radio3">
								E-Commerce
							</label>
						</div>
						<span class="focus-input100"></span>
				</div>
			</div>
					<label class="label-input100" for="WebpageRequired">Webpages Required*</label>
				<div class="wrap-input100">
					<input id="WebpageRequired" class="input100"  type="number" name="WebpageRequired" id="WebpageRequired"
                min="1" max="120" step="1" value="1" >
					<span class="focus-input100"></span>
				</div>
                <label class="label-input100" for="Contentwriting">Content Writing*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2" name="Contentwriting">
							<option value = "required">Required</option>
							<option value = "not required">Not required</option>
							
							
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
				 <label class="label-input100" for="HostingServices">Hosting Services*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2" name="HostingServices">
							<option value = "required">Required</option>
							<option value = "not required">Not required</option>
							
							
						</select>
					</div>
					<span class="focus-input100"></span>	
				</div>
					<label class="label-input100" for="LogoDesign">Logo Design*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2" name="LogoDesign">
							<option value = "required">Required</option>
							<option value = "not required">Not Required</option>
							
							
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
                 <label class="label-input100" for="WebsiteRequiredin">Website Required in*</label>
                 <div class="wrap-input100 input100-select">	
					<div>
						<select class="selection-2" name="WebsiteRequiredin">
							<option value = "10-15days">10-15 Days</option>
							<option value = "16-20days">16-20 Days</option>
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
				
				<div class="container-contact100-form-btn">
					<div class="btn btn-success">
					  <button  name="submit" type ="submit" onclick="validate(form.name.value,form.phone.value,form.Websitetype.value,form.Contentwriting.value,form.HostingServices.value,form.LogoDesign.value,form.WebsiteRequiredin.value,form.WebpageRequired.value);
					  ">
					  						Submit
				    	</button>
				    </div>	
				</div>
			</form>
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>
						<span class="txt3">
							 Madurai , TN -IN
                                Anuppandi, Theppakulam Road
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>
						<span class="txt3">
							 0452 2312437 | +91-7339129812
                                Mon-Fri 9am-6pm
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>
						<span class="txt3">
							info@v7lancers.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>

   
   