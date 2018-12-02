<html>
    <head>
		<title>Read</title>
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
						
<a href="login.php">logout</a>
						
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
						Read Complaints
					</span>
				</div>



<?php
//$conn=mysqli_connect("localhost","root","Y91zmCIUrAQBB94I","water authority");
include_once 'connection.php';
$temp3=0;
$rect=-1;
$s="SELECT * FROM complaint ";
$user=$_GET['varname'];
$d="SELECT O_Id FROM log where mob=$user";
$dd=mysqli_query($conn, $d);
while($rw = mysqli_fetch_array($dd))
{
	$temp= $rw['O_Id'];
//	$temp2=$rw['emp_id'];
	
}
$V="SELECT AE_Id FROM ae where Mobile_Number=$user";
		$VV=mysqli_query($conn, $V);
		while($vw = mysqli_fetch_array($VV))
		{
			//$temp= $vw['O_Id'];
			$temp2=$vw['AE_Id'];
			
		}

$result= mysqli_query($conn, $s);
 If (mysqli_num_rows($result) > 0) 
 {
    while ($row = mysqli_fetch_array($result)) {
$e="SELECT Panchayt_Name FROM panchayat where AE_Id=$temp2";

$ee=mysqli_query($conn, $e);
while($re = mysqli_fetch_array($ee))
{
$temp3= $re['Panchayt_Name'];

	//echo $temp3;
	


//echo $row['panchayath'];

if(($row['panchayath']==$temp3)&&($row['rectified']==1))
{
	
	if($temp==6)
	{
		
 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
        <?php
}
	else if(($temp==5)&&($row['rectified']==1))
	{
		$V="SELECT AXE_Id FROM axe where Mobile_Number=$user";
		$VV=mysqli_query($conn, $V);
		while($vw = mysqli_fetch_array($VV))
		{
			//$temp= $vw['O_Id'];
			$temp2=$vw['AXE_Id'];
			
		}
$axr=array();
$pan=array();
$f="SELECT AE_Id FROM ae WHERE  $temp2 = AXE_Id;" ;
		$ff=mysqli_query($conn, $f);
		$kh=mysqli_num_rows($ff);
		$i=0;
		while($rl = mysqli_fetch_array($ff))
{
		//echo $temp;
		$axr[$i]=$rl['AE_Id'];
		
		$i++;
}
$cn=count($axr);
for($j=0;$j<$kh;$j++)
{
	$g="SELECT Panchayt_Name FROM panchayat WHERE  AE_Id = $axr[$j];" ;
		$gg=mysqli_query($conn, $g);
		$lh=mysqli_num_rows($gg);
		while($rm= mysqli_fetch_array($gg))
		{
			//echo $rm['Panchayt_Name'];
			if($row['panchayath']==$rm['Panchayt_Name'])
			{
	 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
		<?php
     			
			}
			
		}
}	
//echo $axr[$j];

}	
else if($temp==4)
	{
		$V="SELECT EE_Id FROM ee where Mobile_Number=$user";
		$VV=mysqli_query($conn, $V);
		while($vw = mysqli_fetch_array($VV))
		{
			//$temp= $vw['O_Id'];
			$temp2=$vw['EE_Id'];
			
		}
$axr=array();
$pan=array();
$f="SELECT AE_Id FROM ae WHERE  $temp2 = EE_Id;" ;
		$ff=mysqli_query($conn, $f);
		$kh=mysqli_num_rows($ff);
		$i=0;
		while($rl = mysqli_fetch_array($ff))
{
		//echo $temp;
		$axr[$i]=$rl['AE_Id'];
		
		$i++;
}
$cn=count($axr);
for($j=0;$j<$kh;$j++)
{
	$g="SELECT Panchayt_Name FROM panchayat WHERE  AE_Id = $axr[$j];" ;
		$gg=mysqli_query($conn, $g);
		$lh=mysqli_num_rows($gg);
		while($rm= mysqli_fetch_array($gg))
		{
			//echo $rm['Panchayt_Name'];
			if($row['panchayath']==$rm['Panchayt_Name'])
			{
	 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
		<?php
     			
			}
			
		}
}	
//echo $axr[$j];

}	
else if($temp==3)
	{
		$V="SELECT SE_Id FROM se where Mobile_Number=$user";
		$VV=mysqli_query($conn, $V);
		while($vw = mysqli_fetch_array($VV))
		{
			//$temp= $vw['O_Id'];
			$temp2=$vw['SE_Id'];
			
		}
$axr=array();
$pan=array();
$f="SELECT AE_Id FROM ae WHERE  $temp2 = SE_Id;" ;
		$ff=mysqli_query($conn, $f);
		$kh=mysqli_num_rows($ff);
		$i=0;
		while($rl = mysqli_fetch_array($ff))
{
		//echo $temp;
		$axr[$i]=$rl['AE_Id'];
		
		$i++;
}
$cn=count($axr);
for($j=0;$j<$kh;$j++)
{
	$g="SELECT Panchayt_Name FROM panchayat WHERE  AE_Id = $axr[$j];" ;
		$gg=mysqli_query($conn, $g);
		$lh=mysqli_num_rows($gg);
		while($rm= mysqli_fetch_array($gg))
		{
			//echo $rm['Panchayt_Name'];
			if($row['panchayath']==$rm['Panchayt_Name'])
			{
	 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
		<?php
     			
			}
			
		}
}	
//echo $axr[$j];

}	
else if($temp==2)
	{
		$V="SELECT CE_Id FROM ce where Mobile_Number=$user";
		$VV=mysqli_query($conn, $V);
		while($vw = mysqli_fetch_array($VV))
		{
			//$temp= $vw['O_Id'];
			$temp2=$vw['CE_Id'];
			
		}
$axr=array();
$pan=array();
$f="SELECT AE_Id FROM ae WHERE  $temp2 = CE_Id;" ;
		$ff=mysqli_query($conn, $f);
		$kh=mysqli_num_rows($ff);
		$i=0;
		while($rl = mysqli_fetch_array($ff))
{
		//echo $temp;
		$axr[$i]=$rl['AE_Id'];
		
		$i++;
}
$cn=count($axr);
for($j=0;$j<$kh;$j++)
{
	$g="SELECT Panchayt_Name FROM panchayat WHERE  AE_Id = $axr[$j];" ;
		$gg=mysqli_query($conn, $g);
		$lh=mysqli_num_rows($gg);
		while($rm= mysqli_fetch_array($gg))
		{
			//echo $rm['Panchayt_Name'];
			if($row['panchayath']==$rm['Panchayt_Name'])
			{
	 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
		<?php
     			
			}
			
		}
}	
//echo $axr[$j];

}	
else if(($temp==1)&&($row['rectified']==1))
	{
		$temp2=1;
		echo "hai";
$axr=array();
$pan=array();
$f="SELECT AE_Id FROM ae WHERE  $temp2 = MD_Id;" ;
		$ff=mysqli_query($conn, $f);
		$kh=mysqli_num_rows($ff);
		$i=0;
		while($rl = mysqli_fetch_array($ff))
{
		//echo $temp;
		$axr[$i]=$rl['AE_Id'];
		//echo $axr[$i];
		$i++;
}
$cn=count($axr);
for($j=0;$j<$kh;$j++)
{
	$g="SELECT Panchayt_Name FROM panchayat WHERE  AE_Id = $axr[$j];" ;
		$gg=mysqli_query($conn, $g);
		$lh=mysqli_num_rows($gg);
		while($rm= mysqli_fetch_array($gg))
		{
			//echo $rm['Panchayt_Name'];
			if($row['panchayath']==$rm['Panchayt_Name'])
			{
	 ?>     
<table border="2"> 
<tr>
<th>Type</th>
<th>Name</th>
<th>District</th>
<th>Taluk</th>
<th>Panchayth</th>
<th>Rectification status</th>
</tr>
        <tr>
            <td><?php echo $row['type']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['district']; ?></td> 
            <td><?php echo $row['taluk']; ?></td> 
			 <td><?php echo $row['panchayath']; ?></td> 
            <td><?php echo $row['rectified']; ?></td>
			
           
        </tr>
		</table>
		<?php
     			
			}
			
		}
}	
//echo $axr[$j];

}
}
	}
}
	
}

?>
</html>