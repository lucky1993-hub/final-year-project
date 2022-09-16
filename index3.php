<?php

//index.php

include('class/Appointment.php');

$object = new Appointment;

if(isset($_SESSION['customer_id']))
{
	header('location:dashboard.php');
}

$object->query = "
SELECT * FROM mechanic_schedule_table 
INNER JOIN mechanic_table 
ON mechanic_table.mechanic_id = mechanic_schedule_table.mechanic_id
WHERE mechanic_schedule_table.mechanic_schedule_status = 'Active' 
AND mechanic_table.mechanic_status = 'Active' 
ORDER BY mechanic_schedule_table.mechanic_schedule_date ASC
";

$result = $object->get_result();

include('header.php');

?>
		      	<div class="card">
		      		<form method="post" action="result.php">
			      		<div class="card-header"><h3><b>Mechanic Schedule List</b></h3></div>
			      		<div class="card-body">
		      				<div class="table-responsive">
		      					<table class="table table-striped table-bordered">
		      						<tr>
		      							<th>Mechanic Name</th>
		      							<th>Address</th>
		      							<th>Appointment Date</th>
		      							<th>Appointment Day</th>
		      							<th>Available Time</th>
		      							<th>Action</th>
		      						</tr>
		      						<?php
		      						foreach($result as $row)
		      						{
		      							echo '
		      							<tr>
		      								<td>'.$row["mechanic_name"].'</td>
		      								<td>'.$row["mechanic_address"].'</td>
		      								<td>'.$row["mechanic_schedule_date"].'</td>
		      								<td>'.$row["mechanic_schedule_day"].'</td>
		      								<td>'.$row["mechanic_schedule_start_time"].' - '.$row["mechanic_schedule_end_time"].'</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-sm get_appointment" data-id="'.$row["mechanic_schedule_id"].'">Get Appointment</button></td>
		      							</tr>
		      							';
		      						}
		      						?>
		      					</table>
		      				</div>
		      			</div>
		      		</form>
		      	</div>
		    

<?php

include('footer.php');

?>

<script>

$(document).ready(function(){
	$(document).on('click', '.get_appointment', function(){
		var action = 'check_login';
		var mechanic_schedule_id = $(this).data('id');
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action, mechanic_schedule_id:mechanic_schedule_id},
			success:function(data)
			{
				window.location.href=data;
			}
		})
	});
});

</script>