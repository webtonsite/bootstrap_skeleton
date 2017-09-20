<?php
	
	if ( !isset($_GET['page']) ){
		//echo 'PAGE NOT FOUND';
		$page_file = 'pages/home.php';
	}
	else{
		$page_name = $_GET['page'];
		switch($page_name){
			case 'home':
				$page_file = 'pages/home.php';
				break;
			case 'pages':
				$page_file = 'pages/pages.php';
				break;					
			case 'aboutus':
				$page_file = 'pages/aboutus.php';
				break;	
			case 'login':
				$page_file = 'pages/login.php';
				break;
			case 'signup':
				$page_file = 'pages/signup.php';
				break;				
			default:
				header('Location: '.$home_url);
				break;
		}
	}
	include_once $page_file;
?>
