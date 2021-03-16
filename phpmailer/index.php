<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Mail Send</title>
  </head>
  <body>
  </body>
  <form action="send_email.php" method="post">
	<div class="form-group">
		<label for="name">Your Name:</label>
		<input type="text" name="name" class="form-control" id="name" required >
	</div>
		<div class="form-group">
		<label for="name">Recipient Email:</label>
		<input type="text" name="email" class="form-control" id="name" required >
	</div>
		<div class="form-group">
		<label for="name">Your Subject:</label>
		<input type="text" name="subject" class="form-control" id="name" required >
	</div>
	<div class="form-group">
		<label for="name">Your Message:</label>
		<textarea name="message" class="form-control" id="name" required ></textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="form-control" >
	</div>
  
  </form>
 </html>