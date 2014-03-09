﻿ <?php
	require_once("bdd/bddconnect.php");
	require_once("form/session.php");
	
	$connected = ifconnected();
	$pseudo = $_SESSION['member']['pseudo'];
	$logoff="true";
	require_once("form/req.php");
	
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/com-center.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		
		<link rel="stylesheet" type="text/css" href="css/validate.css">
		
		<link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">
		
		<link href='http://fonts.googleapis.com/css?family=Esteban|Prosto+One|Nova+Oval' rel='stylesheet' type='text/css'>
		
		
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/signup_submit.js"></script>
		<script src="js/overContainer.js"></script>
		
		<script src="js/validate.js"></script>
		<title>Split</title>
	</head>
	<body>
	<div id="body">
		<div class="over-wrapper">
			<div id="panAcount">			
				<nav class="menu1">
					<ul class="level1">
	<?php
	$library = $bdd->query($lib);
	// var_dump($lib);
	while ($donnees = $library->fetch()) { ?>
						<li><a class="signIn" herf="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>
	<?php }	?>
							<ul class="level2">
								
	<?php
	$game = $bdd->query($gmelib);
	while ($donnees = $game->fetch()) {	?>
								<li class="myGame">
									<span class="g-img">
										<img src="<?php echo$donnees["url"];?>"/>
									</span>
									<span class="g-desc">
										<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>									
									</span>
		<?php	$play = $bdd->query($ply);
		while ($donnees = $play->fetch()) {	?>
									<ul class="level3">
										<li>
											<a href="#"><?php echo$donnees[$_SESSION['user']['langue']];?></a>
		<?php }	?>


										</li>
									</ul>
								</li>
	<?php } ?>
							</ul>
						</li>
					</ul>
				</nav>
	<?php	$signup = $bdd->query($sign);
	while ($donnees = $signup->fetch()) {
	if($_SESSION['member']['connected']==1){$idt=""; $class="profil";}else{$idt="signIn"; $class="OCoff";}
	?>				
				<span id="<?php echo $idt; ?>" class="signIn">
					<?php echo$donnees[$_SESSION['user']['langue']]; ?>
					<a href="#"> <?php echo $pseudo["pseudo"]; ?></a>
					<div class="<?php echo $class; ?>">
						<?php	
							$avt = $bdd->query($profil);
							$avat = $avt->fetch();
							echo"<img src='".$avat['avatar']."'/>";
						?>
						<?php
							echo"<a href='#'>".$pseudo['pseudo']."</a>";
						?>	
					</div>					
				</span>
				<?php
					$deco = $bdd->query($deco); 
					$donnees = $deco->fetch();		
				?>
				<span class="logoff"><?php echo("<a href='form/validateSignUp.php?logoff=".$logoff." '>".$donnees[$_SESSION['user']['langue']]."</a>"); ?></span>
	<?php } ?>
				<form method="POST" action="form/validateSignUp.php" id="formLang">
					<select id="langue" name="langue" class="language">
					<?php
						if($_SESSION['user']['langue'] == "text_fr" || $_SESSION['user']['langue'] == Null)
						{
							echo "<option>Francais</option>";
							echo"<option>English</option>";
						}
						else if($_SESSION['user']['langue'] == "text_en")
						{
							echo"<option>English</option>";
							echo "<option>Francais</option>";
						}
					?>
					</select>
				</form>
			</div>
			<div class="float-container">
				<?php 
					require_once("connect.php");
				?>
			</div>
			</div>

			<div class="element-container">
				<nav class="menu2 element-container">					
					<ul class="level1">
						<span><a id="logo" href="index.php"><img  src="img/SPLIT_LOGO.PNG"></a></span>
						
						<?php $reponse = $bdd->query($menu);
						while ($donnees = $reponse->fetch()) {	?>						
							<li><a href="action.php"> <?php echo $donnees[$_SESSION['user']['langue']]; ?>	</a></li>
						<?php }	?>
						
						<?php	$cart = $bdd->query($cart);
						while ($donnees = $cart->fetch()) { ?>
												
							<li class="cart"><a href="game.php"><?php echo $donnees[$_SESSION['user']['langue']]; ?></a>	
							<?php require_once("cart.php");?>						
						</li>
						<?php } ?>
					</ul>
				</nav>