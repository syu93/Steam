<?php
	require_once("form/validateSignIn.php");	
?>
<div class="overContainer OCoff" id="overContainer">
	<span id="closeBtn" class="closeBtn">
		<img  src="img/close.PNG">
	</span>
	
	<div class="connect">
		
		<form method="POST" action="index.php" name="singup">
			<span>Name : </span> <input type="text" name="name">
			</br>
			<span>Firstname : </span> <input type="text" name="firstname">
			</br>
			<span>Pseudo : </span> <input id="pseudo" type='text' name='pseudo'>
			
				<span id="ckPseudo" class="checkPseudo"></span>
			
			</br>
			
			<span>e mail : </span> <input id="mail" type="text" name="email">
			
				<span id="ckMail" class="checkMail"></span>
				
			</br>
			<span>Password : </span> <input id="signinPW" type="password" name="password">
			</br>
			</br>
			<span>Country : </span> <input type="text" name="country">
			</br>
			</br>
			<span>Language : </span> <!-- Set the language choses in content and recovery it from sql-->
				<select name="language">
					<option>English</option>
					<option>French</option>
				</select>
			</br></br>
			<input type="button" value="Submit" name="singup">
		</form>
	</div>
</div>