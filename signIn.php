<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>autoMan</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-login {
	color: #636363;
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;
	position: relative;
	justify-content: center;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
}
.modal-login  .form-group {
	position: relative;
}
.modal-login i {
	position: absolute;
	left: 13px;
	top: 11px;
	font-size: 18px;
}
.modal-login .form-control {
	padding-left: 40px;
}
.modal-login .form-control:focus {
	border-color: #00ce81;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .hint-text {
	text-align: center;
	padding-top: 10px;
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}
.modal-login .btn, .modal-login .btn:active {	
	border: none;
	background: #bf0039 !important;
	line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #bf0039 !important;
}
.modal-login .modal-footer {
	background: #dddada;
	border-color: #dddada;
	text-align: center;
	margin: 0 -10px -10px;
	border-radius: 5px;
	font-size: 13px;
	justify-content: center;
}
.modal-login .modal-footer a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
</head>
<body>


<!-- Modal HTML -->

	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="Mechanic_details1.php" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Email" name="email" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name ="password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-danger btn-block btn-lg" value="Login">
                        
					</div>
				</form>
			</div>
			<div class="modal-footer">
            <a href="Registration.php">Register</a>
			</div>
		</div>
	</div>
</div>   

<?php


session_start();
$con = mysqli_connect("localhost","root","","fleet");



if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = $_POST["password"];
	$sql = "SELECT * FROM customers WHERE c_email = '$email' AND c_pwd = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
		$_SESSION["c_id "] = $row["c_id "];
		$_SESSION["c_name"] = $row["c_name"];
		$ip_add = getenv("REMOTE_ADDR");
		//we have created a cookie in login_form.php page so if that cookie is available means user is not login
        
	//if user record is available in database then $count will be equal to 1
		echo "login_success";
			$BackToMyPage = $_SERVER['HTTP_REFERER'];
				if(!isset($BackToMyPage)) {
					header('Location: '.$BackToMyPage);
					echo "<script> location.href='booking.php'; </script>";
					
					
				} else {
					header('Location: index.php'); // default page
				} 
				
			
            exit;

		}else{
                

                
                    echo "<span style='color:red;'>Please register before login..!</span>";
                    exit();
                }
    
	

    
	


?>
</body>
</html>