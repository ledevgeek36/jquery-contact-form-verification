<?php 
	
	// checkif user comming from a request

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	// assign variable
	$username = filter_var($_POST['username'],FILTER_VALIDATE_STRING);
	$useremail = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
	$usersubject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
	$usermessage = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

	// creating array errors

	$usernameError = "";
	$EmailError   = "";
	$SubjectError  = "";
	$MessageError  = "";

	
if($username == ''){

		$usernameError = 'Error: Please enter you name.';
	}

	if($useremail == ''){

		$EmailError = 'Error: Please enter email.';
	}
	
	if($usersubject == ''){

		$SubjectError = 'Error: Please enter subject.';
	}
	
	if($usermessage == ''){

		$MessageError = 'Error: Please enter message.';
	}else{
		
	$recipient = "your@email.com";
	$email   = $_POST['email'];
	$subject   = $_POST['subject'];
	$message   = $_POST['message'];
	mail($recipient,$email,$subject,$message);

	
}

 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<!-- font awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- main css -->

		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
			
			<!-- content -->

			<div class="overlay"></div>
		
		<div class="container">
		<h2 class="text-center">Contact Us</h2>
		<div class="errors">
		</div>
			<form action="<?=$_SERVER['PHP_SELF']?>" class="contact-form" method="POST">
				<div class="form-group">
				<input type="text" name="username" id="username" class="username form-control" placeholder="Your Username" value="">
				<i class="fa fa-user"></i>
				<span class="asterix">*</span>
				<span class="cross">x</span>
				<span class="verify"><i class="fa fa-check" aria-hidden="true"></i></span>
				<div class="alert alert-danger custom-alert">
					user must be more than 3 letter
				</div>
				</div>

				
				<div class="form-group">
				<input type="text" name="email" class=" email form-control" placeholder="Your Email" value="<?php if(isset($email)){echo $email;} ?>">
				<i class="fa fa-envelope"></i>
				<span class="asterix">*</span>
				<span class="cross">x</span>
				<span class="verify"><i class="fa fa-check" aria-hidden="true"></i></span>
				<div class="alert alert-danger custom-alert">
					Email can not be empty
				</div>
				</div>

				
				<div class="form-group">
				<input type="text" name="subject" class="subject form-control" placeholder="Your subject" value="<?php if(isset($subject)){echo $subject;} ?>">
				<i class="fa fa-pencil"></i>
				<span class="asterix">*</span>
				<span class="cross">x</span>
				<span class="verify"><i class="fa fa-check" aria-hidden="true"></i></span>
				<div class="alert alert-danger custom-alert">
					Subject can not be empty
				</div>
				</div>

				
				<div class="form-group">
				<textarea class=" message form-control" name="message" placeholder="Your Message"><?php if(isset($message)){echo $message;} ?></textarea>
				<i class="fa fa-comments message-icon"></i>
				<span class="asterix">*</span>
				<span class="cross">x</span>
				<span class="verify"><i class="fa fa-check" aria-hidden="true"></i></span>
				<div class="alert alert-danger custom-alert">
					message should be more than <b>10</b> characteres
				</div>
				</div>

				<div class="form-group">
				<input type="submit" value="send" class="btn btn-success btn-block">
				<i class="fa fa-paper-plane send-icon"></i>
				</div>
			</form>
		</div>

	
		<!-- jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
		<script src="js/custom.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- custom js -->
		
	</body>
</html>
