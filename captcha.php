<html>

	<link rel="stylesheet" href = "captcha.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <body>
   
      
		<div class = "validate-form">
			<h1 Style = "Text-align:center;"> Validate Captcha  </h1>
			<form action="?" method="POST">
			
			
				<div class="g-recaptcha" data-sitekey="6LcMosUZAAAAAJdZ43WvNviy3EInQagMNs1fo44a
"></div>
				<input type = "submit" name ="Submit" value ="Validate" class = "submit-btn">
				
		  
			</form>
			<?php 
					$secretKey="6LcMosUZAAAAAGgXnZXnAFHPOj7FZZsH4ekcrk65";
					$responseKey = $_POST['g-recaptcha-response']
					$UserIP = $_SERVER['REMOTE_ADDR'];
					$url = "https://www.google.com/recaptcha/api/siteverify?secret="$secretKey&response=$responseKey&remoteip=$UserIP";
					
					$response = file_get_contents($url);
					$response=json_decode($response);
					
					if ($response->success){
						echo "Verified"
					}
					else{
						echo "<span>Invalid Captcha, Please Try Again </span>"
					}
					
			
			?>
			
		</div>
		
	  
      
   </body>
</html>
