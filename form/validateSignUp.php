<?php
	require_once("init.php");
	// require_once("session.php");
	require_once("../bdd/bddconnect.php");
 
/*************************************************/
/*************************************************/
/*************************************************/
/*************************************************/

if(isset($_POST["genre"],$_POST["name"],$_POST["firstname"],$_POST["Y"],$_POST["M"],$_POST["D"],$_POST["pseudo"],$_POST["mail"],$_POST["password"],$_POST["country"]))
{
	$date = $_POST["Y"]."-".$_POST["M"]."-".$_POST["D"];
	$avt = $_FILES["avatar"]["name"];

	signup($bdd,$_POST["genre"],$_POST["name"],$_POST["firstname"],$date,$_POST["pseudo"],$avt,$_POST["mail"],$_POST["password"],$_POST["country"]);
	
	$_SESSION["pseudo"] = $_POST["pseudo"];
	$_SESSION["connected"] = true;

}

/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/
/*********************************************************************************/

	if(!empty($_POST))
	{
		// check for Sign Up with ajax file: signup_submit.js
		if(!empty($_POST["langue"]))
		{
			$langue = $_POST["langue"];

			session_start();

			if($langue == "Francais")
			{
				$_SESSION["user"]['langue'] = "text_fr";
				// echo($_SESSION['user']['langue']);
				echo("fr");
			}
			else
			{				
				$_SESSION['user']['langue'] = "text_en";
				// echo($_SESSION["user"]['langue']);
				echo("en");
			}
			return;
		}
	}	
	// header('Location: ../');
?>