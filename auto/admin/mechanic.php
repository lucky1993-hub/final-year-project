<?php

//doctor.php

include('../class/Appointment.php');

$object = new Appointment;

if(!$object->is_login())
{
    header("location:".$object->base_url."admin");
}

if($_SESSION['type'] != 'Admin')
{
    header("location:".$object->base_url."");
}

include('header.php');

?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Mechanic Management</h1>

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Mechanic Schedule</h6>
                            	</div>
                            	<div class="col" align="right">
                            		<button type="button" name="add_mechanic" id="add_mechanic" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            	</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="doctor_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Email Address</th>
                                            <th>Password</th>
                                            <th>Mechanic Name</th>
                                            <th>Mechanic Phone No</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
                include('footer.php');
                ?>

<div id="mechanicModal" class="modal fade">
  	<div class="modal-dialog">
    	<form method="post" id="mechanic_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Add Mechanic</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
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
        		</div>
        		<div class="modal-footer">
          			<input type="hidden" name="hidden_id" id="hidden_id" />
          			<input type="hidden" name="action" id="action" value="Add" />
          			<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>

<div id="viewModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">View Mechanic Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="mechanic_details">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

	var dataTable = $('#mechanic_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"mechanic_action.php",
			type:"POST",
			data:{action:'fetch'}
		},
		"columnDefs":[
			{
				"targets":[0, 1, 2, 4, 5, 6, 7],
				"orderable":false,
			},
		],
	});

    //$('#doctor_date_of_birth').datepicker({
       // format: "yyyy-mm-dd",
       // autoclose: true
    //});

	$('#add_mechanic').click(function(){
		
		$('#mechanic_form')[0].reset();

		$('#mechanic_form').parsley().reset();

    	$('#modal_title').text('Add Mechanic');

    	$('#action').val('Add');

    	$('#submit_button').val('Add');

    	$('#mechanicModal').modal('show');

    	$('#form_message').html('');

	});

	$('#mechanic_form').parsley();

	$('#mechanic_form').on('submit', function(event){
		event.preventDefault();
		if($('#mechanic_form').parsley().isValid())
		{		
			$.ajax({
				url:"mechanic_action.php",
				method:"POST",
				data: new FormData(this),
				dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
				beforeSend:function()
				{
					$('#submit_button').attr('disabled', 'disabled');
					$('#submit_button').val('wait...');
				},
				success:function(data)
				{
					$('#submit_button').attr('disabled', false);
					if(data.error != '')
					{
						$('#form_message').html(data.error);
						$('#submit_button').val('Add');
					}
					else
					{
						$('#mechanicModal').modal('hide');
						$('#message').html(data.success);
						dataTable.ajax.reload();

						setTimeout(function(){

				            $('#message').html('');

				        }, 5000);
					}
				}
			})
		}
	});

	$(document).on('click', '.edit_button', function(){

		var mechanic_id = $(this).data('id');

		$('#mechanic_form').parsley().reset();

		$('#form_message').html('');

		$.ajax({

	      	url:"mechanic_action.php",

	      	method:"POST",

	      	data:{mechanic_id:mechanic_id, action:'fetch_single'},

	      	dataType:'JSON',

	      	success:function(data)
	      	{

	        	$('#mechanic_email_address').val(data.mechanic_email_address);

                $('#mechanic_email_address').val(data.mechanic_email_address);
                $('#mechanic_password').val(data.mechanic_password);
                $('#mechanic_name').val(data.mechanic_name);
                $('#uploaded_image').html('<img src="'+data.mechanic_profile_image+'" class="img-fluid img-thumbnail" width="150" />')
                $('#hidden_mechanic_profile_image').val(data.mechanic_profile_image);
                $('#mechanic_phone_no').val(data.mechanic_phone_no);
                $('#mechanic_address').val(data.mechanic_address);
	        	$('#modal_title').text('Edit Mechanic');

	        	$('#action').val('Edit');

	        	$('#submit_button').val('Edit');

	        	$('#mechanicModal').modal('show');

	        	$('#hidden_id').val(mechanic_id);

	      	}

	    })

	});

	$(document).on('click', '.status_button', function(){
		var id = $(this).data('id');
    	var status = $(this).data('status');
		var next_status = 'Active';
		if(status == 'Active')
		{
			next_status = 'Inactive';
		}
		if(confirm("Are you sure you want to "+next_status+" it?"))
    	{

      		$.ajax({

        		url:"mechanic_action.php",

        		method:"POST",

        		data:{id:id, action:'change_status', status:status, next_status:next_status},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}
	});

    $(document).on('click', '.view_button', function(){
        var mechanic_id = $(this).data('id');

        $.ajax({

            url:"mechanic_action.php",

            method:"POST",

            data:{mechanic_id:mechanic_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';

                html += '<tr><td colspan="2" class="text-center"><img src="'+data.mechanic_profile_image+'" class="img-fluid img-thumbnail" width="150" /></td></tr>';

                html += '<tr><th width="40%" class="text-right">Mechanic Email Address</th><td width="60%">'+data.mechanic_email_address+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Mechanic Password</th><td width="60%">'+data.mechanic_password+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Mechanic Name</th><td width="60%">'+data.mechanic_name+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Mechanic Phone No.</th><td width="60%">'+data.mechanic_phone_no+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Mechanic Address</th><td width="60%">'+data.mechanic_address+'</td></tr>';

                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#mechanic_details').html(html);

            }

        })
    });

	$(document).on('click', '.delete_button', function(){

    	var id = $(this).data('id');

    	if(confirm("Are you sure you want to remove it?"))
    	{

      		$.ajax({

        		url:"mechanic_action.php",

        		method:"POST",

        		data:{id:id, action:'delete'},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}

  	});



});
</script>