<?php

include('../class/Appointment.php');

$object = new Appointment;

if($_POST["action"] == 'mechanic_profile')
{
	sleep(2);

	$error = '';

	$success = '';

	$mechanic_profile_image = '';

	$data = array(
		':mechanic_email_address'	=>	$_POST["mechanic_email_address"],
		':mechanic_id'			=>	$_POST['hidden_id']
	);

	$object->query = "
	SELECT * FROM mechanic_table 
	WHERE mechanic_email_address = :mechanic_email_address 
	AND mechanic_id != :mechanic_id
	";

	$object->execute($data);

	if($object->row_count() > 0)
	{
		$error = '<div class="alert alert-danger">Email Address Already Exists</div>';
	}
	else
	{
		$mechanic_profile_image = $_POST["hidden_mechanic_profile_image"];

		if($_FILES['mechanic_profile_image']['name'] != '')
		{
			$allowed_file_format = array("jpg", "png");

	    	$file_extension = pathinfo($_FILES["mechanic_profile_image"]["name"], PATHINFO_EXTENSION);

	    	if(!in_array($file_extension, $allowed_file_format))
		    {
		        $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
		    }
		    else if (($_FILES["mechanic_profile_image"]["size"] > 2000000))
		    {
		       $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
		    }
		    else
		    {
		    	$new_name = rand() . '.' . $file_extension;

				$destination = '../images/' . $new_name;

				move_uploaded_file($_FILES['mechanic_profile_image']['tmp_name'], $destination);

				$mechanic_profile_image = $destination;
		    }
		}

		if($error == '')
		{
			$data = array(
				':mechanic_email_address'			=>	$object->clean_input($_POST["mechanic_email_address"]),
				':mechanic_password'				=>	$_POST["mechanic_password"],
				':mechanic_name'					=>	$object->clean_input($_POST["mechanic_name"]),
				':mechanic_profile_image'			=>	$mechanic_profile_image,
				':mechanic_phone_no'				=>	$object->clean_input($_POST["mechanic_phone_no"]),
				':mechanic_address'				=>	$object->clean_input($_POST["mechanic_address"])
			);

			$object->query = "
			UPDATE mechanic_table  
			SET mechanic_email_address = :mechanic_email_address, 
			mechanic_password = :mechanic_password, 
			mechanic_name = :mechanic_name, 
			mechanic_profile_image = :mechanic_profile_image, 
			mechanic_phone_no = :mechanic_phone_no, 
			mechanic_address = :mechanic_address
			WHERE mechanic_id = '".$_POST['hidden_id']."'
			";
			$object->execute($data);

			$success = '<div class="alert alert-success">Mechanic Data Updated</div>';
		}			
	}

	$output = array(
		'error'					=>	$error,
		'success'				=>	$success,
		'mechanic_email_address'	=>	$_POST["mechanic_email_address"],
		'mechanic_password'		=>	$_POST["mechanic_password"],
		'mechanic_name'			=>	$_POST["mechanic_name"],
		'mechanic_profile_image'	=>	$mechanic_profile_image,
		'mechanic_phone_no'		=>	$_POST["mechanic_phone_no"],
		'mechanic_address'		=>	$_POST["mechanic_address"]
	);

	echo json_encode($output);
}

if($_POST["action"] == 'admin_profile')
{
	sleep(2);

	$error = '';

	$success = '';

	$hospital_logo = $_POST['hidden_hospital_logo'];

	if($_FILES['hospital_logo']['name'] != '')
	{
		$allowed_file_format = array("jpg", "png");

	    $file_extension = pathinfo($_FILES["hospital_logo"]["name"], PATHINFO_EXTENSION);

	    if(!in_array($file_extension, $allowed_file_format))
		{
		    $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
		}
		else if (($_FILES["hospital_logo"]["size"] > 2000000))
		{
		   $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
	    }
		else
		{
		    $new_name = rand() . '.' . $file_extension;

			$destination = '../images/' . $new_name;

			move_uploaded_file($_FILES['hospital_logo']['tmp_name'], $destination);

			$hospital_logo = $destination;
		}
	}

	if($error == '')
	{
		$data = array(
			':admin_email_address'			=>	$object->clean_input($_POST["admin_email_address"]),
			':admin_password'				=>	$_POST["admin_password"],
			':admin_name'					=>	$object->clean_input($_POST["admin_name"]),
			':hospital_name'				=>	$object->clean_input($_POST["hospital_name"]),
			':hospital_address'				=>	$object->clean_input($_POST["hospital_address"]),
			':hospital_contact_no'			=>	$object->clean_input($_POST["hospital_contact_no"]),
			':hospital_logo'				=>	$hospital_logo
		);

		$object->query = "
		UPDATE admin_table  
		SET admin_email_address = :admin_email_address, 
		admin_password = :admin_password, 
		admin_name = :admin_name, 
		hospital_name = :hospital_name, 
		hospital_address = :hospital_address, 
		hospital_contact_no = :hospital_contact_no, 
		hospital_logo = :hospital_logo 
		WHERE admin_id = '".$_SESSION["admin_id"]."'
		";
		$object->execute($data);

		$success = '<div class="alert alert-success">Admin Data Updated</div>';

		$output = array(
			'error'					=>	$error,
			'success'				=>	$success,
			'admin_email_address'	=>	$_POST["admin_email_address"],
			'admin_password'		=>	$_POST["admin_password"],
			'admin_name'			=>	$_POST["admin_name"], 
			'hospital_name'			=>	$_POST["hospital_name"],
			'hospital_address'		=>	$_POST["hospital_address"],
			'hospital_contact_no'	=>	$_POST["hospital_contact_no"],
			'hospital_logo'			=>	$hospital_logo
		);

		echo json_encode($output);
	}
	else
	{
		$output = array(
			'error'					=>	$error,
			'success'				=>	$success
		);
		echo json_encode($output);
	}
}

?>