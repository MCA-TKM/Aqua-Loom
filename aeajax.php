<?php


include_once 'connection.php'; 


if(isset($_POST['ae'])) {



    
    $sql="select * from ae WHERE MD_Id = ".$_POST['md']." AND CE_Id = ".$_POST['ce']." AND SE_Id = ".$_POST['se']." AND EE_Id = ".$_POST['ee']." AND AXE_Id = ".$_POST['axe']." AND AE_Name = '".$_POST['ae']."'";

    $query =mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0 ) {

        echo "2";

    } else {
      
      $ss="insert into log (emp_name,mob,pass,O_Id)values('".$_POST["ae"]."', '".$_POST["Mobile"]."',123456789,6)";
      mysqli_query($conn, $ss);
  

        $sql = "INSERT INTO ae (MD_Id,CE_Id,SE_Id,EE_Id,AXE_Id,AE_Name,Mobile_Number,Password)VALUES ('".$_POST["md"]."', '".$_POST["ce"]."', '".$_POST["se"]."', '".$_POST["ee"]."','".$_POST["axe"]."','".$_POST["ae"]."', '".$_POST["Mobile"]."','12345')";

      //echo $sql;

        if (mysqli_query($conn, $sql)) {
         echo "1";
     } else {
         echo "0";
     }
     $conn->close();


 }










} else  if(isset($_POST["md_Id"]) && !empty($_POST["md_Id"]))
{


  $m="select * from ce WHERE MD_Id = ".$_POST['md_Id']."";
    
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display CE list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select CE</option>';
    while($row = $query->fetch_assoc()){ 
        echo '<option value="'.$row['CE_Id'].'">'.$row['CE_Name'].'</option>';
    }
   }
   else
   {
    echo '<option value="" selected disabled>CE not available</option>';
   }
}

else  if(isset($_POST["CE"]) && !empty($_POST["CE"]))
{


  $m="select * from se WHERE CE_Id = ".$_POST['CE']."";
    
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display SE list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select SE</option>';
    while($row = $query->fetch_assoc()){ 
        echo '<option value="'.$row['SE_Id'].'">'.$row['SE_Name'].'</option>';
    }
   }
   else
   {
    echo '<option value="" selected disabled>SE not available</option>';
   }
}

else  if(isset($_POST["SE"]) && !empty($_POST["SE"]))
{


  $m="select * from ee WHERE SE_Id = ".$_POST['SE']."";
    
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display EE list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select EE</option>';
    while($row = $query->fetch_assoc()){ 
        echo '<option value="'.$row['EE_Id'].'">'.$row['EE_Name'].'</option>';
    }
   }
   else
   {
    echo '<option value="" selected disabled>EE not available</option>';
   }
}

else  if(isset($_POST["EE"]) && !empty($_POST["EE"]))
{


  $m="select * from axe WHERE EE_Id = ".$_POST['EE']."";
    
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display AXE list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select AXE</option>';
    while($row = $query->fetch_assoc()){ 
        echo '<option value="'.$row['AXE_Id'].'">'.$row['AXE_Name'].'</option>';
    }
   }
   else
   {
    echo '<option value="" selected disabled>AXE not available</option>';
   }
}


?>