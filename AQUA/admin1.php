<!DOCTYPE HTML>


<html>
	
<head>
	<title>Admin1</title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>
<?php


include_once 'connection.php';
?>

	
	<!-- Header -->
			
<header id="header">
				
<div class="inner">
					
<a href="index.php" class="logo">Aqua Loom</a>

					
<nav id="nav">
						
<a href="index.php">Home</a>
						
<a href="login.php">login</a>
						
<a href="#####">contact us</a>
					
</nav>
				
</div>
			
</header>
			
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>


  
	
	
  <!-- Main -->

   
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Add District/Taluk/Panchayat
					</span>
				</div>
        

        <!-- Form for Adding details -->

      
			
      <table style="width:80%">

<!-- Adding Image Buttons -->
  <tr> 
         <!-- Form for Adding DISTRICT details -->
      <form class="login100-form validate-form" action="district.php">
             
       <td><input type="image" src="images/District.png" alt="Submit" width="200" height="220">
      </td></form>
       <!-- Form for Adding TALUK details -->
      <form class="login100-form validate-form" action="taluk.php">
      <td> <input type="image" src="images/Taluk.png" alt="Submit" width="200" height="220">
      </td></form>
         <!-- Form for Adding PANCHAYAT details -->
      <form class="login100-form validate-form" action="panchayat.php">
  
      <td> <input type="image" src="images/Panchayat.png" alt="Submit" width="200" height="220" >
      </td></form>      
  </tr>
         
                                
    
    
     

						
			</section>


		<!-- Scripts -->
			
<script src="assets/js/jquery.min.js"></script>
			
<script src="assets/js/skel.min.js"></script>
			
<script src="assets/js/util.js"></script>
			
<script src="assets/js/main.js"></script>

	

</body>

</html>
