<?php 
$pageTitle = "Contact Mike"; 
$section = "contact"; 

 include('header.php'); ?>
	
	<div class="section page"> 

		<div class="wrapper"> 

			<h1> Contact </h1>

			<p> I&rsquo;d love to hear from you! Complete the form to tsend me an email.</p>

			<form method="post"> 

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
				</table>
				<input type="submit" value="send">
			</form> 
		
		</div> 

	</div>


		<?php include('footer.php');?>