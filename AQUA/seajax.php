<?php


include_once 'connection.php'; 


if(isset($_POST['se'])) {



    
    $sql="select * from se WHERE MD_Id = ".$_POST['md']." AND CE_Id = ".$_POST['ce']." AND SE_Name = '".$_POST['se']."'";

    $query =mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0 ) {

        echo "2";

    } else {


        $sql = "INSERT INTO se (MD_Id,CE_Id,SE_Name,Mobile_Number)VALUES ('".$_POST["md"]."', '".$_POST["ce"]."', '".$_POST["se"]."', '".$_POST["Mobile"]."')";

      // echo $sql;

        if (mysqli_query($conn, $sql)) {
         echo "1";
     } else {
         echo "0";
     }
     $conn->close();


 }










} else  if(isset($_POST["md_Id"]) && !empty($_POST["md_Id"])){


  $m="select * from ce WHERE MD_Id = ".$_POST['md_Id']."";
    
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display CE list
  if($rowCount > 0){
    echo '<option value="" selected disabled>Select CE</option>';
    while($row = $query->fetch_assoc()){ 
        echo '<option value="'.$row['CE_Id'].'">'.$row['CE_Name'].'</option>';
    }
}else{
    echo '<option value="" selected disabled>CE not available</option>';
}
}


?>