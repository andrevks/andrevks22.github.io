<?php
	
	if(isset($_POST['submit'])){

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$loguin= $_POST['loguin'];
		$senha= $_POST['senha'];

		$mailTo ="italiabk@gmail.com";
		$headers = "From: My website, email:".$email;
		$txt = "You have received an e-mail from".$name.".\n\n";


		mail($mailTo, $txt,$headers);

		header("Location:acc.php?mailsend");

	}

?>
