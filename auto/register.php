<?php

//login.php

include('header.php');

?>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-md-6">
			<span id="message"></span>
			<div class="card">
				<div class="card-header">Register</div>
				<div class="card-body">
					<form method="post" id="customer_register_form">
						<div class="form-group">
							<label>Email Address<span class="text-danger">*</span></label>
							<input type="text" name="customer_email_address" id="customer_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Password<span class="text-danger">*</span></label>
							<input type="password" name="customer_password" id="customer_password" class="form-control" required  data-parsley-trigger="keyup" />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name<span class="text-danger">*</span></label>
									<input type="text" name="customer_name" id="customer_name" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact No.<span class="text-danger">*</span></label>
									<input type="text" name="customer_phone_no" id="customer_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Complete Address<span class="text-danger">*</span></label>
							<textarea name="customert_address" id="customer_address" class="form-control" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="customer_register" />
							<input type="submit" name="customer_register_button" id="customer_register_button" class="btn btn-primary" value="Register" />
						</div>

						<div class="form-group text-center">
							<p><a href="login.php">Login</a></p>
						</div>
					</form>
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>
</div>

<?php

include('footer.php');

?>

<script>

$(document).ready(function(){

	//$('#patient_date_of_birth').datepicker({
        //format: "yyyy-mm-dd",
        //autoclose: true
    //});

	$('#customer_register_form').parsley();

	$('#customer_register_form').on('submit', function(event){

		event.preventDefault();

		if($('#customer_register_form').parsley().isValid())
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				dataType:'json',
				beforeSend:function(){
					$('#customer_register_button').attr('disabled', 'disabled');
				},
				success:function(data)
				{
					$('#customer_register_button').attr('disabled', false);
					$('#customer_register_form')[0].reset();
					if(data.error !== '')
					{
						$('#message').html(data.error);
					}
					if(data.success != '')
					{
						$('#message').html(data.success);
					}
				}
			});
		}

	});

});

</script>