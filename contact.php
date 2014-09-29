<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name= $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$countries = $_POST["countries"];

	$email_body =""; 

	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message; 
	$email_body = $email_body . "Countries: " . $message; 

	// todo: send email

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
					<p> I&rsquo;d love to hear from you! Complete the form to tsend me an email.</p>

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