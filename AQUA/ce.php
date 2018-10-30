<!DOCTYPE HTML>


<html>
	
<head>
	<title>CHIEF ENGINEER</title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>
<?php


include_once 'connection.php';
$id=2;
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
						Add CHIEF ENGINEER
					</span>
				</div>
            <!-- Form for Adding details -->
            
        <form action="" method="post">
        
			
                <table style="width:80%">

                  <!-- Selecting MD --> 
                  <tr>
                     <td><label for="Superior">Select Superior: </label></td>
                     <?php

                      $m="select O_Name from office where O_Id=1";
                      $result=mysqli_query($conn,$m);
                    ?>

                     <td> <select name="Superior"  >
                     <option value="">Select MD</option>
                     <?php

                          while($row=mysqli_fetch_array($result))
                           {
                            echo"<option value='". $row['O_Id']."'>" . $row['O_Name'] . "</option>";
                           }

                    echo "</select>"       
                    ?>
                    
                     </td>

                  </tr>

                  <!-- Adding OFFICE NAME -->
                  <tr>
                         
              
                        <td><label for="Officename">Office Name:</label></td>
                        <td><input type="text" name="Officename" placeholder="Enter Office Name:"></td>
                         </tr>
                <tr>

                 <!-- Adding MOBILE NO -->
                  <tr>
                         
              
                        <td><label for="Mobile">Mobile No:</label></td>
                        <td><input type="text" name="Mobile" placeholder="Enter Mobile No:"></td>
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

    $superior=$_POST['Superior'];
    
    $officename=$_POST['Officename'];

    $mobile=$_POST['Mobile'];
    

    $a="select O_Id from office where O_Name='$superior'";
    if ($result=mysqli_query($conn,$a))
    {
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
      {
     
        //echo implode($row);
        $idint=(int)implode($row);
      }

    }
    

    $s="insert into ce (MD_Id,CE_Name,Mobile_Number) values('$idint','$officename','$mobile')";
   mysqli_query($conn, $s);
   
   $m="select * from ce";
   $result=mysqli_query($conn,$m);
echo "<table>
<tr>
<th>MD_Id</th>
<th>CE_Id</th>
<th>CE_Name</th>
<th>Mobile_Number</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
  echo"<tr>";
  echo"<td>" . $row['MD_Id']."</td>";
  echo"<td>" . $row['CE_Id']."</td>";
  echo"<td>" . $row['CE_Name']."</td>";
  echo"<td>" . $row['Mobile_Number']."</td>";
  echo"</tr>";
}
echo"</table>";



  }  
        
        
?>


</body>
</html>
