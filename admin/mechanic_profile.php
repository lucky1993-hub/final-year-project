<?php

include('../class/Appointment.php');

$object = new Appointment;

if(!$object->is_login())
{
    header("location:".$object->base_url."");
}

if($_SESSION['type'] != 'Mechanic')
{
    header("location:".$object->base_url."");
}

$object->query = "
    SELECT * FROM mechanic_table
    WHERE mechanic_id = '".$_SESSION["admin_id"]."'
    ";

$result = $object->get_result();

include('header.php');

?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

                    <!-- DataTales Example -->
                    
                    <form method="post" id="profile_form" enctype="multipart/form-data">
                        <div class="row"><div class="col-md-10"><span id="message"></span><div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                                    </div>
                                    <div clas="col" align="right">
                                        <input type="hidden" name="action" value="mechanic_profile" />
                                        <input type="hidden" name="hidden_id" id="hidden_id" />
                                        <button type="submit" name="edit_button" id="edit_button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--<div class="row">
                                    <div class="col-md-6">!-->
                                        <span id="form_message"></span>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mechanic Email Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="mechanic_email_address" id="mechanic_email_address" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Mechanic Password <span class="text-danger">*</span></label>
                                                    <input type="password" name="mechanic_password" id="mechanic_password" class="form-control" required  data-parsley-trigger="keyup" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mechanic Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="mechanic_name" id="mechanic_name" class="form-control" required data-parsley-trigger="keyup" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Mechanic Phone No. <span class="text-danger">*</span></label>
                                                    <input type="text" name="mechanic_phone_no" id="mechanic_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mechanic Address </label>
                                                    <input type="text" name="mechanic_address" id="mechanic_address" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mechanic Image <span class="text-danger">*</span></label>
                                            <br />
                                            <input type="file" name="mechanic_profile_image" id="mechanic_profile_image" />
                                            <div id="uploaded_image"></div>
                                            <input type="hidden" name="hidden_mechanic_profile_image" id="hidden_mechanic_profile_image" />
                                        </div>
                                    <!--</div>
                                </div>!-->
                            </div>
                        </div></div></div>
                    </form>
                <?php
                include('footer.php');
                ?>

<script>
$(document).ready(function(){

    //$('#doctor_date_of_birth').datepicker({
       // format: "yyyy-mm-dd",
        //autoclose: true
   // });

    <?php
    foreach($result as $row)
    {
    ?>
    $('#hidden_id').val("<?php echo $row['mechanic_id']; ?>");
    $('#mechanic_email_address').val("<?php echo $row['mechanic_email_address']; ?>");
    $('#mechanic_password').val("<?php echo $row['mechanic_password']; ?>");
    $('#mechanic_name').val("<?php echo $row['mechanic_name']; ?>");
    $('#mechanic_phone_no').val("<?php echo $row['mechanic_phone_no']; ?>");
    $('#mechanic_address').val("<?php echo $row['mechanic_address']; ?>");
    
    $('#uploaded_image').html('<img src="<?php echo $row["mechanic_profile_image"]; ?>" class="img-thumbnail" width="100" /><input type="hidden" name="hidden_mechanic_profile_image" value="<?php echo $row["mechanic_profile_image"]; ?>" />');

    $('#hidden_mechanic_profile_image').val("<?php echo $row['mechanic_profile_image']; ?>");
    <?php
    }
    ?>

    $('#mechanic_profile_image').change(function(){
        var extension = $('#mechanic_profile_image').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['png','jpg']) == -1)
            {
                alert("Invalid Image File");
                $('#mechanic_profile_image').val('');
                return false;
            }
        }
    });

    $('#profile_form').parsley();

	$('#profile_form').on('submit', function(event){
		event.preventDefault();
		if($('#profile_form').parsley().isValid())
		{		
			$.ajax({
				url:"profile_action.php",
				method:"POST",
				data:new FormData(this),
                dataType:'json',
                contentType:false,
                processData:false,
				beforeSend:function()
				{
					$('#edit_button').attr('disabled', 'disabled');
					$('#edit_button').html('wait...');
				},
				success:function(data)
				{
					$('#edit_button').attr('disabled', false);
                    $('#edit_button').html('<i class="fas fa-edit"></i> Edit');

                    $('#mechanic_email_address').val(data.mechanic_email_address);
                    $('#mechanic_password').val(data.mechanic_password);
                    $('#mechanic_name').val(data.mechanic_name);
                    $('#mechanic_phone_no').val(data.mechanic_phone_no);
                    $('#mechanic_address').text(data.mechanic_address);

                    if(data.mechanic_profile_image != '')
                    {
                        $('#uploaded_image').html('<img src="'+data.mechanic_profile_image+'" class="img-thumbnail" width="100" />');

                        $('#user_profile_image').attr('src', data.mechanic_profile_image);
                    }

                    $('#hidden_mechanic_profile_image').val(data.mechanic_profile_image);
						
                    $('#message').html(data.success);

					setTimeout(function(){

				        $('#message').html('');

				    }, 5000);
				}
			})
		}
	});

});
</script>