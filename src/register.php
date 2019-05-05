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
				  <a class="primary-menu__link" href="index.php">HOME</a>
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
			<div id ="regform" class="register-form auth-form">
			  <h2 class="register-header auth-header">Регистрация</h2>
			  <form onsubmit="return validateForm(this)" action="../server/registration.php" method="POST">
				<input required placeholder="Login" class="sign sign-login" name="username" type="text"/>
				<div class="form-group">
				  <input required placeholder="Password" id="pass1" class="sign sign-password" name="password" type="password"/>
				  <p class="error-text">
					Your passwords must match
				  </p>
				</div>
				<div class="form-group">
				  <input required placeholder="Repeat Password" id="pass2" class="sign sign-password" name="passwordAnother" type="password"/>
				  <p class="error-text">
					Your passwords must match
				  </p>
				</div>
				<input required placeholder="Phone" class="sign sign-phone" name="phone" type="text"/>
				<input required placeholder="Email" class="sign sign-email" name="email" type="email"/>
				<input required placeholder="Address" class="sign sign-address" name="address" type="text"/>
				<input required placeholder="Birthday" class="sign sign-birthday" name="birthday" type="text"/>
				<input class="sign sign-submit" name="submit" type="submit" value="Зарегистрироваться"/>
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
