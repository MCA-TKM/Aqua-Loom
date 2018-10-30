<!DOCTYPE HTML>


<html>
	
<head>
	<title>District</title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>

	
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
						Add District
					</span>
				</div>
            <!-- Form for Adding details -->

        <form action="" method="post">
			
                <table style="width:80%">

                  <!-- Adding District -->
                    <tr>
              
                        <td><label for="District">DISTRICT:</label></td>
                        <td><input type="text" name="District" placeholder="Enter new DISTRICT"></td>
                        <td><input type="submit" value="ADD" name="submit" class="alt" /></td>
                      </tr>
                <tr>




	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            
<?php


    include_once 'connection.php';

    

    
          

    if(isset($_POST['submit']))
      {
        $District=$_POST['District'];

        $s="insert into district (District_Name) values('$District')";
       mysqli_query($conn, $s);
       
       $m="select * from district";
    $result=mysqli_query($conn,$m);
    echo "<table>
    <tr>
    <th>District_Id</th>
    <th>District_Name</th>
    </tr>";
    while($row=mysqli_fetch_array($result))
    {
      echo"<tr>";
      echo"<td>" . $row['District_Id']."</td>";
      echo"<td>" . $row['District_Name']."</td>";
      echo"</tr>";
    }
    echo"</table>";



      }  
            
            
?>





	</body>
</html>
