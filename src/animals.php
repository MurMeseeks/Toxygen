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
			  <ul class="left-menu__list">
				<li onclick="openNav()" class="left-menu__item">
				  <i class="fas fa-shopping-basket"></i>
				  <span id="basket"></span>
				</li>
				<li id="dropdown" class="dropdown ddmenu left-menu__item">
				  <i class="fas fa-user"></i>
					<?php
                    session_start();
                    if (isset($_SESSION['logged']))
                        print
                            '<ul id="dropdown-list" class="hide">
				  <li><a href="profile.html">My Profile</a></li>
				  <li><a href="admin.html">Admin Panel</a></li>
				  <li><a href="#">Log Out</a></li>
			  </ul>';
				else
				print
				'<ul id="dropdown-list" class="hide">
				<li><a href="auth.html">Sign In</a></li>
				<li><a href="register.html">Register</a></li>
			</ul>';
				?>
				</li>
			  </ul>
			</div>
		  </nav>
		</header>
		<div id="basket-slide" class="basket">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <h3>Корзина:</h3>
		  <form action="../server/pushcart.php" method="POST">
			<table id="bk-list" class="basket__list">
			  <thead id="bk-head" class="basket__head">
				<tr>
				  <th>Товар</th>
				  <th>Цена</th>
				  <th>Кол-во</th>
				  <th>Сумма</th>
				</tr>
			  </thead>
			  <tbody id="bk-body" class="basket__body">
			  </tbody>
			</table>
			<h3>ИТОГО: <span id="total">0 $</span></h3>
			<button type="submit" class="checkout-button">Оформить заказ</button>
		  </form>
		</div>
		<main class="main">
		  <div class="container">
			<div class="product" data-id="1" data-cost="39" data-amount="5">
			  <div class="make3D">
				<div class="product-front">
				  <div class="shadow"></div>
				  <img src="./img/birds/blue_macaw/bird_blue_4.jpg" height="265px" alt="" />
				  <div class="image_overlay"></div>
				  <div class="add_to_cart">Add to cart</div>
				  <div class="stats">
					<div class="stats-container">
					  <span class="product_price">$39</span>
					  <span class="product_name">Пожилой попугай</span>
					  <p>Птица</p>
					  <div class="product-options">
						<strong>SIZES</strong>
						<span>XS, S, M, L, XL, XXL</span>
						<strong>COLORS</strong>
						<div class="colors">
						  <div class="c-blue"><span></span></div>
						  <div class="c-red"><span></span></div>
						  <div class="c-white"><span></span></div>
						  <div class="c-green"><span></span></div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
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
			  <a target="_blank" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
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
<script src="js/basket.js"></script>
<script src="js/dropdown.js"></script>
</body>
</html>
