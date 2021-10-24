<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "water_db");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM bill_tb 
  WHERE c_number LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR c_number LIKE '%".$search."%'
  OR h_no LIKE '%".$search."%'

 ";
}
else
{
 $query = "
  SELECT * FROM bill_tb ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>S.No</th>    
     <th>Name</th>
     <th>Consumer Number</th>
     <th>Approved Date</th>
     <th>House Number</th>
     <th>Bill Date</th>
     <th>Amount</th>
     <th>Last Date</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["c_number"].'</td>
    <td>'.$row["dat"].'</td>
    <td>'.$row["h_no"].'</td>
    <td>'.$row['dat'].'</td>
    <td>'.$row['amount'].'</td>
    <td>'.$row['l_date'].'</td>




   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>