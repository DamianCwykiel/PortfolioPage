<?
$error = ""; $success = "";
 
if($_POST){
	if(!$_POST["email"]){
		$error.="Please, fill in the email field!<br>";
	}
	if(!$_POST["content"]){
		$error.="Please, fill in the content field!<br>";
	}
	if(!$_POST["subject"]){
		$error.="Please, fill in the subject field!<br>";
		
	}
	if($_POST['email']&& filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
		
		$error.="Please, email address is invalid!<br>";
	}
	if ($error !=""){
		$error =
		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<p><strong>There was an error(s) in your form:</strong>
			</p>'.$error.'
		</div>';	
	}else{
		$emailTo = "damian.cwykiel@gmail.com";
		$subject = $_POST['subject'];
		$content = $_POST['content']; 
		$headers = "From: ".$_POST['email'];
		if(mail($emailTo, $subject, $content, $headers)){
			$success =
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
				Your message was sent. I`ll respond you as soon as possible.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>';
		}else{
			$error =
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<p>Your message could`t be send - please try again later</p>
			</div>';
		}
	}
}
