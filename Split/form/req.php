<?php
	// Header
	$menu=" SELECT * FROM content WHERE active='yes' AND tag ='menu' ORDER BY position LIMIT 5";
	$lib="SELECT text_fr, text_en FROM content WHERE title='mylibrary' AND active='yes' AND tag ='menu' AND connected='".$connected."' ";		
	$gmelib="SELECT * FROM game WHERE active='yes' AND tag ='game' AND connected='".$connected."' ";
	$ply="SELECT text_fr, text_en FROM content WHERE title='play' AND active='yes' AND tag ='menu' AND connected='".$connected."' ";
	$sign="SELECT text_fr, text_en FROM content WHERE title='signup' AND active='yes' AND tag ='text' AND connected='".$connected."' ";
	$deco="SELECT text_fr, text_en FROM content WHERE title='logoff' AND active='yes' AND tag ='text' AND connected='".$connected."' ";
	$cart="SELECT text_fr, text_en FROM content WHERE title='cart' AND active='yes' AND tag ='menu' ";
	$profil="SELECT avatar FROM member WHERE pseudo='".$pseudo["pseudo"]."'";
	
	
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// Index
	$game_index='SELECT * FROM game ';
	
	
	
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	/*************************************************************************/
	// action
	
	$action='SELECT * FROM game WHERE genre ="action" ';
	
	$testgenre = 'SELECT genre.genre FROM game, genre, gamegenre WHERE game.id=gamegenre.idgame AND gamegenre.idgenre=genre.id AND game.title="TitanFall"';
	
	$testfriend = 'SELECT friend.pseudofriend FROM member, friend WHERE member.pseudo=friend.pseudomember AND member.pseudo="Syu93" ';
	
?>