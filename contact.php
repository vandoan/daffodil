<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name= trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);
	$countries = trim($_POST["countries"]);

	if ($name =="" OR $email =="" OR $message=="") {
		echo "You must specify a value for name, email address, and message."; 
		exit; 
	}

	foreach( $_POST as $value){
		if( stripos($value, "Content-Type:") !== FALSE){
			echo "There was a problem witht he information you entered.";
			exit;
		}
	}

	if ($_POST["address"] != "") {
		echo "Your form submission has an error."; 
		exit; 
	}

	require_once("class.phpmailer.php");
	$mail = new PHPMailer(); 

	if (!$mail->ValidateAddress($email)){
		echo "You must specify a valid email address."; 
		exit; 
	}


	$email_body =""; 
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message; 
	$email_body = $email_body . "Countries: " . $message; 

	$mail->SetFrom($email,$name);
	$address = "vdoan09@gmail.com";
	$mail->AddAddress($address, "Mike's Shirt");
	$mail->Subject    = "A Message from Mike's Shirt |" . $name;
	$mail->MsgHTML($email_body);

	if(!$mail->Send()) {
	  echo "There was a problem sending the email:: " . $mail->ErrorInfo;
		exit; 
	}

	header('Location: contact.php?status=thanks');
	exit;
} 
?> <?php
	
$pageTitle = "Contact Mike"; 
$section = "contact"; 

 include('header.php'); ?>
	
	<div class="section page"> 

		<div class="wrapper"> 

			<h1> Contact </h1>

			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
				<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>
			<?php } else { ?>
					<p> I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

					<form method="post" action="contact.php"> 

						<table> 
							<tr>
								<th>
									<label for="name">Name</label>
								</th>
								<td>
									<input type='text' name="name" id="name"> 
								</td> 
							</tr>
							<tr>
								<th>
									<label for="name">Email</label>
								</th>
								<td>
									<input type='text' name="email" id="email"> 
								</td> 
							</tr>
							<tr>
								<th>
									<label for="name">message</label>
								</th>
								<td>
									<textarea name="message" id="message"></textarea>
								</td> 
							</tr>
							<tr style="display:none;">
								<th>
									<label for="address">address</label>
								</th>
								<td>
									<input type="text"  name="address" id="address"></textarea>
									<p> Humnans leave the field blank. </p>
								</td> 
							</tr>
							<tr> <th><label for='Countries'>Select the countries that you have visited:
									</label>
								</th><br>
								<td>
									<select multiple="multiple" name="formCountries[]">
									    <option value="US">United States</option>
									    <option value="UK">United Kingdom</option>
									    <option value="France">France</option>
									    <option value="Mexico">Mexico</option>
									    <option value="Russia">Russia</option>
									    <option value="Japan">Japan</option>
									</select>
								</td>
							</tr>
						</table>
						<input type="submit" value="send">
					</form> 
			<?php } ?>

		</div> 

	</div>


		<?php include('footer.php');?>