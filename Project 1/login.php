<?php
include_once('includes/init.php');
include_once('database/user.php');

  if (isLoginCorrect($_POST['username'], $_POST['password'])) { //database/user.php
    	setCurrentUser($_POST['username']); //includes/session.php
  		header('Location: home_page.php');
  }
  header('Location: index.php');

?>