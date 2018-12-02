<!DOCTYPE HTML>


<html>
	
<head>
	<title>Taluk</title>
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
						Add Taluk
					</span>
				</div>
            <!-- Form for Adding details -->
            
        <form action="" method="post">
        
			
                <table style="width:80%">

                  <!-- Selecting District --> 
                  <tr>
                     <td><label for="District">Select District : </label></td>
                     <?php

                      $m="select District_Name from district";
                      $result=mysqli_query($conn,$m);
                    ?>

                     <td> <select name="District"  style=" height: 50px; width: 150px;">
                     <?php

                          while($row=mysqli_fetch_array($result))
                           {
                            echo"<option value='". $row['District_Name']."'>" . $row['District_Name'] . "</option>";
                           }

                    echo "</select>"       
                    ?>
                    
                     </td>

                  </tr>

                 <!-- Adding Taluk -->
                  <tr>
                         
              
                        <td><label for="Taluk">TALUK:</label></td>
                        <td><input type="text" name="Taluk" placeholder="Enter new TALUK"></td>
                        <td><input type="submit" value="ADD" name="submit" class="alt" /></td>
                      </tr>
                <tr>
                </table>    

                




	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            
<?php

    

if(isset($_POST['submit']))
  {

    $District=$_POST['District'];
    
    $Taluk=$_POST['Taluk'];
    

    $a="select District_Id from district where District_Name='$District'";
    if ($result=mysqli_query($conn,$a))
    {
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
      {
     
        //echo implode($row);
        $idint=(int)implode($row);
      }

    }
    

    $s="insert into taluk (Taluk_Name,District_Id) values('$Taluk','$idint ')";
   mysqli_query($conn, $s);
   
   $m="select * from taluk";
   $result=mysqli_query($conn,$m);
echo "<table>
<tr>
<th>Taluk_Id</th>
<th>Taluk_Name</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
  echo"<tr>";
  echo"<td>" . $row['Taluk_Id']."</td>";
  echo"<td>" . $row['Taluk_Name']."</td>";
  echo"</tr>";
}
echo"</table>";



  }  
        
        
?>






	</body>
</html>
