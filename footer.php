<footer class="footer">
    <div class="footer__list">
        <div class="footer__logo">
            <a href="/" aria-label="Главная страница">
                <img src="http://cx75857.tw1.ru/wp-content/uploads/2024/05/logo.svg" alt="Логотип" />
            </a>
        </div>
        <?php
        // Меню 1
        if (has_nav_menu('footer_menu_1')) {
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_1',
                'container' => false,
                'menu_class' => 'footer__menu',
                'fallback_cb' => false,
            ));
        }

        // Меню 2
        if (has_nav_menu('footer_menu_2')) {
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_2',
                'container' => false,
                'menu_class' => 'footer__menu',
                'fallback_cb' => false,
            ));
        }

        // Меню 3
        if (has_nav_menu('footer_menu_3')) {
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_3',
                'container' => false,
                'menu_class' => 'footer__menu',
                'fallback_cb' => false,
            ));
        }

        // Меню 4
        if (has_nav_menu('footer_menu_4')) {
            wp_nav_menu(array(
                'theme_location' => 'footer_menu_4',
                'container' => false,
                'menu_class' => 'footer__menu',
                'fallback_cb' => false,
            ));
        }
        ?>

        <ul class="footer__menu">
            <li>
                <div class="search-form">
                    <button class="search-form__btn" aria-label="Поиск"></button>
                    <input type="search" class="search-form__input validate-search" placeholder="Найти магазин" aria-label="Поисковый запрос" required />
                </div>
            </li>
            <li class="social">
                <?php if (is_active_sidebar('footer_social_icons')) : ?>
                    <?php dynamic_sidebar('footer_social_icons'); ?>
                <?php endif; ?>
            </li>
        </ul>

        <ul class="footer__menu">
            <?php if (is_active_sidebar('footer_contact_info')) : ?>
                <?php dynamic_sidebar('footer_contact_info'); ?>
            <?php else : ?>
                <li>
                    300041, Тульская обл., <br />
                    г. Тула, ул. Путейская, д. 5
                </li>
                <li>
                    ТЦ Сарафан: 10:00-21:00 <br />
                    Лента: 08:00-22:00
                </li>
                <li>+7 (4872) 33-80-55</li>
            <?php endif; ?>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
