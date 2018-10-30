<?php
include_once 'connection.php';
$district = '';
$query = "SELECT District_Name FROM district  ORDER BY District_Name  ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
{
    $district .= '<option value="'.$row["District_Name"].'">'.$row["District_Name"].'</option>';
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Dynamic Dependent Select Box using JQuery Ajax with PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">Dynamic Dependent Select Box using JQuery Ajax with PHP</h2><br /><br />
   <select name="district" id="district" class="form-control action">
    <option value="">Select District</option>
    <?php echo $district; ?>
   </select>
   <br />
   <select name="Taluk" id="Taluk" class="form-control action">
    <option value="">Select Taluk</option>
   </select>
   <br />
   <select name="Panchayat" id="Panchayat" class="form-control">
    <option value="">Select Panchayat</option>
   </select>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#taluk').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "district")
   {
    result = 'taluk';
   }
   else
   {
    result = 'panchayat';
   }
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{DistrictId:District_Id, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>
