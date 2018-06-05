<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>CH-NEW ACC</title>
	<link rel="stylesheet" href="acc.css">
	

</head>
<body>	

  <div class="container">
   
       <div class="company-info">

       		<h2>ChainsPHOTO</h2>
       		
       		<h3>Faça sua conta e comece agora!</h3>

       		

       </div>

       	<hr/>	
		 <form action="/validar.php" method="post" target="-blank" >	
		  <fieldset class="dentro-form" >	


		    <ul>

			 	<li>
			 		 <input type="text" name="nome" placeholder="Nome" required>  
		    	
					<input type="text" name="sobrenome" placeholder="Sobrenome">

				</li>	
			
				<li>
				
				  <input type="email" name="email" placeholder="Email" required>
		  
		    		<input type="text" name="loguin" placeholder="Loguin" required>
	
		 		</li>	
				
				<li>
					<input type="password" name="senha" placeholder="Senha" required>
				</li>	
				

			
			<p class="submit-btn">
				<button type="submit" name="submit">ENVIAR</button>

		
			</ul>
			</fieldset>
		 </form>
	 
	
   </div>

</body>
</html>
