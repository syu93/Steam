<?php
	require_once("include/header.php");
	require_once("bdd/bddconnect.php");
 	$cart_tag="SELECT text_fr, text_en FROM content WHERE title='cart' AND active=1 AND tag ='menu' ";
	$cart_tot="SELECT text_fr, text_en FROM content WHERE title='total' ";
?>
<html>
<head>
<style>
.menu2 .cart:hover .panier
{
opacity:0;	
}
</style>
</head>
<body>
	<div class="container" style="background:url('css/get.png');">
		<div class="cart_head">
			<h4><?php $mycart1 = $bdd->query($cart_tag); $donnees = $mycart1->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?></h4>
		</div>
			
		<hr>
		<div id="content"class="content">
			<iframe id="cart_window" name="cart_window" class="cart_window" src="http://127.0.0.1/split/include/minicart.php"scrolling="no"></iframe>
		</div>
		<hr>
		<div class="total">
			<H4><?php $mycart2 = $bdd->query($cart_tot); $donnees = $mycart2->fetch(); echo $donnees[$_SESSION['user']['langue']]; ?> : </H4>
			<span id='total' class='<?php echo devise(); ?>' ><?php echo summary(); ?></span>
		</div>	
	</div>
</body>
</html>