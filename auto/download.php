<?php

//download.php

include('class/Appointment.php');

$object = new Appointment;

require_once('class/pdf.php');

if(isset($_GET["id"]))
{
	$html = '<table border="0" cellpadding="5" cellspacing="5" width="100%">';

	$object->query = "
	SELECT garage_name, garage_address, garage_contact_no, garage_logo 
	FROM admin_table
	";

	$garage_data = $object->get_result();

	foreach($garage_data as $garage_row)
	{
		$html .= '<tr><td align="center">';
		if($garage_row['garage_logo'] != '')
		{
			$html .= '<img src="'.substr($garage_row['garage_logo'], 3).'" /><br />';
		}
		$html .= '<h2 align="center">'.$garage_row['garage_name'].'</h2>
		<p align="center">'.$garage_row['garage_address'].'</p>
		<p align="center"><b>Contact No. - </b>'.$garage_row['garage_contact_no'].'</p></td></tr>
		';
	}

	$html .= "
	<tr><td><hr /></td></tr>
	<tr><td>
	";

	$object->query = "
	SELECT * FROM appointment_table 
	WHERE appointment_id = '".$_GET["id"]."'
	";

	$appointment_data = $object->get_result();

	foreach($appointment_data as $appointment_row)
	{

		$object->query = "
		SELECT * FROM customer_table 
		WHERE customer_id = '".$appointment_row["customer_id"]."'
		";

		$patient_data = $object->get_result();

		$object->query = "
		SELECT * FROM mechanic_schedule_table 
		INNER JOIN mechanic_table 
		ON mechanic_table.mechanic_id = mechanic_schedule_table.mechanic_id 
		WHERE mechanic_schedule_table.mechanic_schedule_id = '".$appointment_row["mechanic_schedule_id"]."'
		";

		$mechanic_schedule_data = $object->get_result();
		
		$html .= '
		<h4 align="center">Customer Details</h4>
		<table border="0" cellpadding="5" cellspacing="5" width="100%">';

		foreach($customer_data as $customer_row)
		{
			$html .= '<tr><th width="50%" align="right">Customer Name</th><td>'.$customer_row["customer_name"].'</td></tr>
			<tr><th width="50%" align="right">Contact No.</th><td>'.$customer_row["customer_phone_no"].'</td></tr>
			<tr><th width="50%" align="right">Address</th><td>'.$customer_row["customer_address"].'</td></tr>';
		}

		$html .= '</table><br /><hr />
		<h4 align="center">Appointment Details</h4>
		<table border="0" cellpadding="5" cellspacing="5" width="100%">
			<tr>
				<th width="50%" align="right">Appointment No.</th>
				<td>'.$appointment_row["appointment_number"].'</td>
			</tr>
		';
		foreach($mechanic_schedule_data as $mechanic_schedule_row)
		{
			$html .= '
			<tr>
				<th width="50%" align="right">Mechanic Name</th>
				<td>'.$mechanic_schedule_row["mechanic_name"].'</td>
			</tr>
			<tr>
				<th width="50%" align="right">Appointment Date</th>
				<td>'.$mechanic_schedule_row["mechanic_schedule_date"].'</td>
			</tr>
			<tr>
				<th width="50%" align="right">Appointment Day</th>
				<td>'.$mechanic_schedule_row["mechanic_schedule_day"].'</td>
			</tr>
				
			';
		}

		$html .= '
			<tr>
				<th width="50%" align="right">Appointment Time</th>
				<td>'.$appointment_row["appointment_time"].'</td>
			</tr>
			<tr>
				<th width="50%" align="right">Reason for Appointment</th>
				<td>'.$appointment_row["reason_for_appointment"].'</td>
			</tr>
			<tr>
				<th width="50%" align="right">Customer come into Garage</th>
				<td>'.$appointment_row["customer_come_into_garage"].'</td>
			</tr>
			<tr>
				<th width="50%" align="right">Customer Comment</th>
				<td>'.$appointment_row["customer_comment"].'</td>
			</tr>
		</table>
			';
	}

	$html .= '
			</td>
		</tr>
	</table>';

	echo $html;

	$pdf = new Pdf();

	$pdf->loadHtml($html, 'UTF-8');
	$pdf->render();
	ob_end_clean();
	//$pdf->stream($_GET["id"] . '.pdf', array( 'Attachment'=>1 ));
	$pdf->stream($_GET["id"] . '.pdf', array( 'Attachment'=>false ));
	exit(0);

}

?>