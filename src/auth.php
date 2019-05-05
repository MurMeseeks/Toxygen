<?php
session_start();
if (isset($_SESSION['logged']))
    header('location: animals.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<title>Toxygen shop</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
	<div class="wrapper">
	  <div class="content">
		<header class="header">
		  <nav class="primary-menu">
			<div class="container">
			  <ul class="primary-menu__list">
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="index.html">HOME</a>
				</li>
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="animals.php">PRODUCTS</a>
				</li>
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="#">ABOUT US</a>
				</li>
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="#">CONTACTS</a>
				</li>
			  </ul>
			</div>
		  </nav>
		</header>
		<main class="main">
		  <div class="container">
			<div class="auth-form">
			  <h2 class="auth-header">Авторизация</h2>
			  <form action="http://localhost:8080/Toxygen/server/auth.php" method="POST">
				<input placeholder="Login" class="sign sign-login" name="username" type="text" value=""/>
				<input placeholder="Password" class="sign sign-password" name="password" type="password" value=""/>
				<input class="sign sign-submit" name="submit" type="submit" value="Войти"/>
			  </form>
			</div>
		  </div>
		</main>
	  </div>
	  <footer class="footer">
		<div class="container">
		  <div class="footer__copyright">
			© Copyright @Toxygen 2019, All right reserved
		  </div>
		  <div class="footer__socials">
			<div class="social">
			  <a target="_blank" href="https://vk.com"><i class="fab fa-vk"></i></a>
			</div>
			<div class="social">
			  <a target="_blank" href="https://facebook.com" <i class="fab fa-facebook-f"></i></a>
			</div>
			<div class="social">
			  <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i>
			  </a>
			</div>
			<div class="social">
			  <a target="_blank" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i>
			  </a>
			</div>
		  </div>
		</div>
	  </footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/register.js"></script>
  </body>
</html>
