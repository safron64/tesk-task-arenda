


		<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head();?>

		<title>Аренда</title>
	</head>
	<body>
		<header class="header">
			<div class="header__logo">
				<a href="/" aria-label="Главная страница">
					<img src="http://cx75857.tw1.ru/wp-content/uploads/2024/05/logo.svg" alt="Логотип" />
				</a>
			</div>

			<ul class="header__list">
				<li class="header__list-item header__schedule">
					<div class="header__schedule-title" aria-label="Режим работы">
						Режим работы:
					</div>
					<div class="header__schedule-time" aria-label="Время работы">
						<?php
							$options = get_option('arenda_settings');
							echo esc_html($options['arenda_schedule']);
						?>
					</div>
				</li>
				<li class="header__list-item header__contacts">
					<a href="tel:<?php echo esc_html($options['arenda_phone']); ?>" aria-label="Контактная информация">
						<?php echo esc_html($options['arenda_phone']); ?>
					</a>
				</li>
				<li class="header__list-item header__map">
					<a href="/" aria-label="Карта торгового центра">Карта ТЦ</a>
				</li>
				<li class="header__list-item header__menu">
					<div class="search-form">
						<button class="search-form__btn" aria-label="Поиск"></button>
						<input type="search" class="search-form__input" placeholder="Найти магазин" aria-label="Поисковый запрос" />
					</div>
				</li>
				<li class="header__list-item">
					<div class="menu-btn" id="menu-btn" aria-label="Меню">
						<div class="menu-btn__line menu-btn__line--top"></div>
						<div class="menu-btn__line menu-btn__line--middle"></div>
						<div class="menu-btn__line menu-btn__line--bottom"></div>
					</div>
				</li>
			</ul>

			<nav
				class="nav"
				id="nav"
				role="navigation"
				aria-label="Основное меню"
			>
				<div class="nav__list">
					<ul class="nav__menu start" aria-label="Общая информация">
						<li><a href="#">О нас</a></li>
						<li><a href="#">События</a></li>
						<li><a href="#">Галерея</a></li>
						<li><a href="#">Аренда</a></li>
						<li><a href="#">Карта ТЦ</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Вакансии</a></li>
						<li><a href="#">Тендеры</a></li>
					</ul>
					<ul
						class="nav__menu"
						aria-label="Магазины: Одежда и аксессуары"
					>
						<li class="nav__menu--title">Магазины</li>
						<li><a href="#">Все магазины</a></li>
						<li><a href="#">Женская одежда</a></li>
						<li><a href="#">Мужская одежда</a></li>
						<li><a href="#">Детская одежда</a></li>
						<li><a href="#">Детские товары</a></li>
						<li><a href="#">Обувь</a></li>
						<li><a href="#">Кожгалантерея</a></li>
						<li><a href="#">Продукты</a></li>
					</ul>
					<ul
						class="nav__menu"
						aria-label="Магазины: Товары и техника"
					>
						<li class="nav__menu--title">Магазины</li>
						<li><a href="#">Цифровая и бытовая техника</a></li>
						<li><a href="#">Парфюмерия, косметика</a></li>
						<li><a href="#">Ювелирные украшения</a></li>
						<li><a href="#">Сувениры, подарки</a></li>
						<li><a href="#">Полезное</a></li>
						<li><a href="#">Товары для дома</a></li>
						<li><a href="#">Спортивные товары, одежда</a></li>
						<li><a href="#">Товары для животных</a></li>
					</ul>
					<ul class="nav__menu" aria-label="Кафе и рестораны">
						<li class="nav__menu--title">Кафе и рестораны</li>
						<li><a href="#">Кафе и рестораны</a></li>
						<li><a href="#">Рестораны быстрого обслуживания</a></li>
						<li><a href="#">Кофейни</a></li>
						<li><a href="#">Мороженое и десерты</a></li>
					</ul>
					<ul class="nav__menu" aria-label="Услуги и сервисы">
						<li class="nav__menu--title">Услуги и сервисы</li>
						<li><a href="#">Банкоматы</a></li>
						<li><a href="#">Салоны связи</a></li>
						<li><a href="#">Парикмахерская</a></li>
						<li><a href="#">Администрация</a></li>
						<li><a href="#">Продукты</a></li>
						<li><a href="#">Другое</a></li>
					</ul>
					<ul class="nav__menu" aria-label="Развлечения">
						<li class="nav__menu--title">Развлечения</li>
						<li><a href="#">Джунгли парк</a></li>
						<li><a href="#">Мероприятия</a></li>
						<li><a href="#">Акции</a></li>
						<li><a href="#">Новости</a></li>
					</ul>
				</div>
			</nav>
		</header>
