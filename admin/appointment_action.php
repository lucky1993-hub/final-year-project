<?php

//appointment_action.php

include('../class/Appointment.php');

$object = new Appointment;

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$output = array();

		if($_SESSION['type'] == 'Admin')
		{
			$order_column = array('appointment_table.appointment_number', 'customer_table.customer_name', 'mechanic_table.mechanic_name', 'mechanic_schedule_table.mechanic_schedule_date', 'appointment_table.appointment_time', 'mechanic_schedule_table.mechanic_schedule_day', 'appointment_table.status');
			$main_query = "
			SELECT * FROM appointment_table  
			INNER JOIN mechanic_table 
			ON mechanic_table.mechanic_id = appointment_table.mechanic_id 
			INNER JOIN mechanic_schedule_table 
			ON mechanic_schedule_table.mechanic_schedule_id = appointment_table.mechanic_schedule_id 
			INNER JOIN customer_table 
			ON customer_table.customer_id = appointment_table.customer_id 
			";

			$search_query = '';

			if($_POST["is_date_search"] == "yes")
			{
			 	$search_query .= 'WHERE mechanic_schedule_table.mechanic_schedule_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND (';
			}
			else
			{
				$search_query .= 'WHERE ';
			}

			if(isset($_POST["search"]["value"]))
			{
				$search_query .= 'appointment_table.appointment_number LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR customer_table.customer_name LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR mechanic_table.mechanic_name LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR mechanic_schedule_table.mechanic_schedule_date LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR appointment_table.appointment_time LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR mechanic_schedule_table.mechanic_schedule_day LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR appointment_table.status LIKE "%'.$_POST["search"]["value"].'%" ';
			}
			if($_POST["is_date_search"] == "yes")
			{
				$search_query .= ') ';
			}
			else
			{
				$search_query .= '';
			}
		}
		else
		{
			$order_column = array('appointment_table.appointment_number', 'customer_table.customer_name', 'mechanic_schedule_table.mechanic_schedule_date', 'appointment_table.appointment_time', 'mechanic_schedule_table.mechanic_schedule_day', 'appointment_table.status');

			$main_query = "
			SELECT * FROM appointment_table 
			INNER JOIN mechanic_schedule_table 
			ON mechanic_schedule_table.mechanic_schedule_id = appointment_table.mechanic_schedule_id 
			INNER JOIN customer_table 
			ON customer_table.customer_id = appointment_table.customer_id 
			";

			$search_query = '
			WHERE appointment_table.mechanic_id = "'.$_SESSION["admin_id"].'" 
			';

			if($_POST["is_date_search"] == "yes")
			{
			 	$search_query .= 'AND mechanic_schedule_table.mechanic_schedule_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" ';
			}
			else
			{
				$search_query .= '';
			}

			if(isset($_POST["search"]["value"]))
			{
				$search_query .= 'AND (appointment_table.appointment_number LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR customer_table.customer_name LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR mechanic_schedule_table.mechanic_schedule_date LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR appointment_table.appointment_time LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR mechanic_schedule_table.mechanic_schedule_day LIKE "%'.$_POST["search"]["value"].'%" ';
				$search_query .= 'OR appointment_table.status LIKE "%'.$_POST["search"]["value"].'%") ';
			}
		}

		if(isset($_POST["order"]))
		{
			$order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_query = 'ORDER BY appointment_table.appointment_id DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$object->query = $main_query . $search_query . $order_query;

		$object->execute();

		$filtered_rows = $object->row_count();

		$object->query .= $limit_query;

		$result = $object->get_result();

		$object->query = $main_query . $search_query;

		$object->execute();

		$total_rows = $object->row_count();

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();

			$sub_array[] = $row["appointment_number"];

			$sub_array[] = $row["customer_name"];

			if($_SESSION['type'] == 'Admin')
			{
				$sub_array[] = $row["mechanic_name"];
			}
			$sub_array[] = $row["mechanic_schedule_date"];

			$sub_array[] = $row["appointment_time"];

			$sub_array[] = $row["mechanic_schedule_day"];

			$status = '';

			if($row["status"] == 'Booked')
			{
				$status = '<span class="badge badge-warning">' . $row["status"] . '</span>';
			}

			if($row["status"] == 'In Process')
			{
				$status = '<span class="badge badge-primary">' . $row["status"] . '</span>';
			}

			if($row["status"] == 'Completed')
			{
				$status = '<span class="badge badge-success">' . $row["status"] . '</span>';
			}

			if($row["status"] == 'Cancel')
			{
				$status = '<span class="badge badge-danger">' . $row["status"] . '</span>';
			}

			$sub_array[] = $status;

			$sub_array[] = '
			<div align="center">
			<button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["appointment_id"].'"><i class="fas fa-eye"></i></button>
			</div>
			';
			$data[] = $sub_array;
		}

		$output = array(
			"draw"    			=> 	intval($_POST["draw"]),
			"recordsTotal"  	=>  $total_rows,
			"recordsFiltered" 	=> 	$filtered_rows,
			"data"    			=> 	$data
		);
			
		echo json_encode($output);

	}

	if($_POST["action"] == 'fetch_single')
	{
		$object->query = "
		SELECT * FROM appointment_table 
		WHERE appointment_id = '".$_POST["appointment_id"]."'
		";

		$appointment_data = $object->get_result();

		foreach($appointment_data as $appointment_row)
		{

			$object->query = "
			SELECT * FROM customer_table 
			WHERE customer_id = '".$appointment_row["customer_id"]."'
			";

			$customer_data = $object->get_result();

			$object->query = "
			SELECT * FROM mechanic_schedule_table 
			INNER JOIN mechanic_table 
			ON mechanic_table.mechanic_id = mechanic_schedule_table.mechanic_id 
			WHERE mechanic_schedule_table.mechanic_schedule_id = '".$appointment_row["mechanic_schedule_id"]."'
			";

			$mechanic_schedule_data = $object->get_result();

			$html = '
			<h4 class="text-center">Customer Details</h4>
			<table class="table">
			';

			foreach($customer_data as $customer_row)
			{
				$html .= '
				<tr>
					<th width="40%" class="text-right">Customer Name</th>
					<td>'.$customer_row["customer_name"].'</td>
				</tr>
				<tr>
					<th width="40%" class="text-right">Contact No.</th>
					<td>'.$customer_row["customer_phone_no"].'</td>
				</tr>
				<tr>
					<th width="40%" class="text-right">Address</th>
					<td>'.$customer_row["customer_address"].'</td>
				</tr>
				';
			}

			$html .= '
			</table>
			<hr />
			<h4 class="text-center">Appointment Details</h4>
			<table class="table">
				<tr>
					<th width="40%" class="text-right">Appointment No.</th>
					<td>'.$appointment_row["appointment_number"].'</td>
				</tr>
			';
			foreach($mechanic_schedule_data as $mechanic_schedule_row)
			{
				$html .= '
				<tr>
					<th width="40%" class="text-right">Mechanic Name</th>
					<td>'.$mechanic_schedule_row["mechanic_name"].'</td>
				</tr>
				<tr>
					<th width="40%" class="text-right">Appointment Date</th>
					<td>'.$mechanic_schedule_row["mechanic_schedule_date"].'</td>
				</tr>
				<tr>
					<th width="40%" class="text-right">Appointment Day</th>
					<td>'.$mechanic_schedule_row["mechanic_schedule_day"].'</td>
				</tr>
				
				';
			}

			$html .= '
				<tr>
					<th width="40%" class="text-right">Appointment Time</th>
					<td>'.$appointment_row["appointment_time"].'</td>
				</tr>
				<tr>
					<th width="40%" class="text-right">Reason for Appointment</th>
					<td>'.$appointment_row["reason_for_appointment"].'</td>
				</tr>
			';

			if($appointment_row["status"] != 'Cancel')
			{
				if($_SESSION['type'] == 'Admin')
				{
					if($appointment_row['customer_come_into_garage'] == 'Yes')
					{
						if($appointment_row["status"] == 'Completed')
						{
							$html .= '
								<tr>
									<th width="40%" class="text-right">Customer come into Garage</th>
									<td>Yes</td>
								</tr>
								<tr>
									<th width="40%" class="text-right">Mechanic Comment</th>
									<td>'.$appointment_row["mechanic_comment"].'</td>
								</tr>
							';
						}
						else
						{
							$html .= '
								<tr>
									<th width="40%" class="text-right">Customer come into Garage</th>
									<td>
										<select name="customer_come_into_garage" id="customer_come_into_garage" class="form-control" required>
											<option value="">Select</option>
											<option value="Yes" selected>Yes</option>
										</select>
									</td>
								</tr
							';
						}
					}
					else
					{
						$html .= '
							<tr>
								<th width="40%" class="text-right">Customer come into Garage</th>
								<td>
									<select name="customer_come_into_garage" id="customer_come_into_garage" class="form-control" required>
										<option value="">Select</option>
										<option value="Yes">Yes</option>
									</select>
								</td>
							</tr
						';
					}
				}

				if($_SESSION['type'] == 'Mechanic')
				{
					if($appointment_row["customer_come_into_garage"] == 'Yes')
					{
						if($appointment_row["status"] == 'Completed')
						{
							$html .= '
								<tr>
									<th width="40%" class="text-right">Mechanic Comment</th>
									<td>
										<textarea name="mechanic_comment" id="mechanic_comment" class="form-control" rows="8" required>'.$appointment_row["mechanic_comment"].'</textarea>
									</td>
								</tr
							';
						}
						else
						{
							$html .= '
								<tr>
									<th width="40%" class="text-right">Mechanic Comment</th>
									<td>
										<textarea name="mechanic_comment" id="mechanic_comment" class="form-control" rows="8" required></textarea>
									</td>
								</tr
							';
						}
					}
				}
			
			}

			$html .= '
			</table>
			';
		}

		echo $html;
	}

	if($_POST['action'] == 'change_appointment_status')
	{
		if($_SESSION['type'] == 'Admin')
		{
			$data = array(
				':status'							=>	'In Process',
				':customer_come_into_garage'		=>	'Yes',
				':appointment_id'					=>	$_POST['hidden_appointment_id']
			);

			$object->query = "
			UPDATE appointment_table 
			SET status = :status, 
			customer_come_into_garage = :customer_come_into_garage 
			WHERE appointment_id = :appointment_id
			";

			$object->execute($data);

			echo '<div class="alert alert-success">Appointment Status change to In Process</div>';
		}

		if($_SESSION['type'] == 'Mechanic')
		{
			if(isset($_POST['mechanic_comment']))
			{
				$data = array(
					':status'							=>	'Completed',
					':mechanic_comment'					=>	$_POST['mechanic_comment'],
					':appointment_id'					=>	$_POST['hidden_appointment_id']
				);

				$object->query = "
				UPDATE appointment_table 
				SET status = :status, 
				mechanic_comment = :mechanic_comment 
				WHERE appointment_id = :appointment_id
				";

				$object->execute($data);

				echo '<div class="alert alert-success">Appointment Completed</div>';
			}
		}
	}
	

	if($_POST["action"] == 'delete')
	{
		$object->query = "
		DELETE FROM mechanic_schedule_table 
		WHERE mechanic_schedule_id = '".$_POST["id"]."'
		";

		$object->execute();

		echo '<div class="alert alert-success">Mechanic Schedule has been Deleted</div>';
	}
}

?>