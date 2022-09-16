<?php
//include('connect.php');
if(isset($_POST['view'])){
$con = mysqli_connect("localhost", "root", "", "fleet");
if($_POST["view"] != '')
{
   $update_query = "UPDATE appointment_table SET comment_status = 1 WHERE comment_status=0";
   mysqli_query($con, $update_query);
}
$query = "SELECT * FROM appointment_table 
INNER JOIN appointment_table 
ON customer.customer_id = appointment_table.customer_id
ORDER BY appointment_id DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
  $output .= '
  <li>
  <a href="#">
  <strong>'.$row["customer_name"].'</strong><br />
  <small><em>'.$row["reason_for_appointment"].'</em></small>
  </a>
  </li>
  ';
}
}
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
$status_query = "SELECT * FROM appointment_table WHERE comment_status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
echo json_encode($data);
}
?>
