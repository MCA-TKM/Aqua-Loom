<?php
//fetch.php
if(isset($_POST["action"]))
{
    include_once 'connection.php';
 $output = '';
 if($_POST["action"] == "district")
 {
  $query = "SELECT Taluk_Name FROM taluk WHERE District_Id = '".$_POST["DistrictId"]."' GROUP BY state";
  $result = mysqli_query($conn, $query);
  $output .= '<option value="">Select Taluk</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Taluk_Id"].'">'.$row["Taluk_Name"].'</option>';
  }
 }
}
?>
