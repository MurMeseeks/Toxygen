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
				  <a class="primary-menu__link" href="#">HOME</a>
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
				<li id="dropdown" class="dropdown ddmenu left-menu__item">
				  <i class="fas fa-user"></i>
                    <?php
                    session_start();
                    if (isset($_SESSION['logged']))
                        print
                            '<ul id="dropdown-list" class="hide">
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="admin.php">Admin Panel</a></li>
                                <li><a href="../server/logout.php">Log Out</a></li>
				            </ul>';
                    else
                        print
                            '<ul id="dropdown-list" class="hide">
                                <li><a href="auth.php">Sign In</a></li>
                                <li><a href="register.php">Register</a></li>
                              </ul>';
                    ?>
                </li>
			  </ul>
			</div>
		  </nav>
		</header>
		<section class="section section-main">
		  <div class="container">
			<div class="section-main__left">
			  <h1 class="section-main__header"> Мы продаем милых животных</h1>
			  <p class="section-main__description">
				Sit amet, aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices neque ornare aenean euismod elementum nisi, quis!
			  </p>
			  <button class="section-main__button"><a href="animals.php">Купить</a></button>
			</div>
			<div class="section-main__right">
			  <iframe class="section-main__video" src="https://www.youtube.com/embed/yK_qP68k_UE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		  </div>
		</section>
		<section class="section section-advantages">
		  <div class="container">
			<h2 class="section__header">
			  Наши преимущества
			</h2>
			<div class="section__description">
			  Вы можете почитать чем мы лучше других фирм по продаже животных
			</div>
		  </div>
		</section>
		<section class="section section-products">
		  <div class="container">
			<h2 class="section__header">
			  Категории животных
			</h2>
			<div class="section__description">
			  Мы продаем животных следующих видов:
			</div>
			<div class="section-products__categories">
			  <div class="category">
				<div class="category__name">
				  Птицы
				</div>
				<img class="category__img" alt="Птицы" src="https://cdn1.savepice.ru/uploads/2019/5/5/1fc9dd8fa576256c28d0dba9936997c5-full.jpg"/>
			  </div>
			  <div class="category">
				<div class="category__name">
				  Рыбы
				</div>
				<img class="category__img" alt="Рыбы" src="https://cdn1.savepice.ru/uploads/2019/5/5/1519970fdf34cdac34e09bd44566aa68-full.jpg"/>
			  </div>
			  <div class="category">
				<div class="category__name">
				  Млекопитающие
				</div>
				<img class="category__img" alt="Млекопитающие" src="https://cdn1.savepice.ru/uploads/2019/5/5/ee2c5bca56b8a17bc4b5370064d775d5-full.jpg"/>
			  </div>
			  <div class="category">
				<div class="category__name">
				  Грызуны
				</div>
				<img class="category__img" alt="Грызуны" src="https://cdn1.savepice.ru/uploads/2019/5/5/eacfcf39311075ee20b8984acd8c2c69-full.jpg"/>
			  </div>
			</div>
		  </div>
		</section>
		<section class="section section-reviews">
		  <div class="container">
			<h2 class="section__header">
			  Клиенты о нас
			</h2>
			<p class="section__description">
			  Почитайте что наши клиенты думают о нас.
			</p>
			<div class="review-wrappper">
			  <button class="arrow-left" type="button" name="button"><i class="fas fa-chevron-right"></i></button>
			  <button class="arrow-right" type="button" name="button"><i class="fas fa-chevron-right"></i></button>
			  <div class="review-box">
				<div class="review-logo-setion">
				  <img src="https://lh5.googleusercontent.com/-QTUUAiSPNHA/AAAAAAAAAAI/AAAAAAAAAXk/khjvc_3VjUc/photo.jpg?sz=200">
				</div>
				<div class="review-stories">
				  <ul>
					<li class="active">
					  <div class="star-ratings">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					  </div>
					  <p class="review-message">СПАСИБО ЗА МЕДОЕДА</p>
					  <p class="review-name">Тони</p>
					</li>
					<li>
					  <div class="star-ratings">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					  </div>
					  <p class="review-message">Я не срал</p>
					  <p class="review-name">Буч</p>
					</li>
					<li>
					  <div class="star-ratings">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					  </div>
					  <p class="review-message">Сброооооооооос</p>
					  <p class="review-name">Амерлон Мина</p>
					</li>
					<li>
					  <div class="star-ratings">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					  </div>
					  <p class="review-message">Пишу на C свою БД</p>
					  <p class="review-name">Пожилой Вова</p>
					</li>
					<li>
					  <div class="star-ratings">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					  </div>
					  <p class="review-message">Йоп</p>
					  <p class="review-name">Джаб</p>
					</li>
				  </ul>
				</div>
			  </div>

			</div>		  </div>
		</section>
		<section class="section section-contacts">
		  <div class="container">
			<h2 class="section-contacts__header">
			  Оставайтесь на связи
			</h2>
			<p class="section-contacts__description">
			  Вы можете задать нам все интересующие вас вопросы. Мы постараемся ответить на все!
			</p>
			<div class="section-contacts__wrapper">
			  <div class="section-contacts__form">
				<form action="sendmail.php" method="POST">
				  <div class="input-wrapper">
					<input class="form-input form-name" name="name" placeholder="Имя" type="text" value="" required/>
					<input class="form-input form-email" name="email" placeholder="Почта" type="email" value="" required/>
				  </div>
				  <textarea class="form-text" cols="30" name="message" rows="10" value="" placeholder="Введите свое сообщение"></textarea>
				  <button class="form-submit">Отправить сообщение</button>
				</form>
			  </div>
			  <div class="section-contacts__info">
				<h3 class="info__header">контактная информация</h3>
				<p class="info__address">
				  г. Москва ул. Вятская 27 строение 42
				</p>
				<p class="info__email">
				  <a href="mailto:dmorgil@student.21-school.ru">dmorgil@student.21-school.ru</a>
				</p>
				<p class="info__phone">
				  <a href="tel:555-555-5555">555-555-5555</a>
				</p>
			  </div>
			</div>
		  </div>
		</section>
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
	<script src="js/main.js"></script>
	<script src="js/dropdown.js"></script>
  </body>
</html>
