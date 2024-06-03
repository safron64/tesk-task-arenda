<?php

/* 
    Подключение стилей и скриптов
*/

add_action("wp_enqueue_scripts", "arenda_scripts");

function arenda_scripts() {
    wp_enqueue_style("main", get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style("normalize", get_template_directory_uri() . '/css/normalize.min.css', array(), filemtime(get_template_directory() . '/css/normalize.min.css'));
    wp_enqueue_style("arenda", get_template_directory_uri() . '/css/styles.css', array(), filemtime(get_template_directory() . '/css/styles.css'));

    wp_enqueue_script("main-script", get_template_directory_uri() . '/scripts/index.js', array(), filemtime(get_template_directory() . '/scripts/index.js'), true);
   
}


add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');



add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');

add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');

add_action('admin_menu', 'arenda_add_admin_menu');
add_action('admin_init', 'arenda_settings_init');

function arenda_add_admin_menu() { 
    add_options_page('Arenda Settings', 'Arenda Settings', 'manage_options', 'arenda', 'arenda_options_page');
}

function arenda_settings_init() { 
    register_setting('pluginPage', 'arenda_settings');

    add_settings_section(
        'arenda_pluginPage_section', 
        __('Контактная информация', 'wordpress'), 
        'arenda_settings_section_callback', 
        'pluginPage'
    );

    add_settings_field( 
        'arenda_schedule', 
        __('Режим работы', 'wordpress'), 
        'arenda_schedule_render', 
        'pluginPage', 
        'arenda_pluginPage_section' 
    );

    add_settings_field( 
        'arenda_phone', 
        __('Номер телефона', 'wordpress'), 
        'arenda_phone_render', 
        'pluginPage', 
        'arenda_pluginPage_section' 
    );
}

function arenda_schedule_render() { 
    $options = get_option('arenda_settings');
    ?>
    <input type='text' name='arenda_settings[arenda_schedule]' value='<?php echo $options['arenda_schedule']; ?>'>
    <?php
}

function arenda_phone_render() { 
    $options = get_option('arenda_settings');
    ?>
    <input type='text' name='arenda_settings[arenda_phone]' value='<?php echo $options['arenda_phone']; ?>'>
    <?php
}

function arenda_settings_section_callback() { 
    echo __('Введите контактную информацию.', 'wordpress');
}

function arenda_options_page() { 
    ?>
    <form action='options.php' method='post'>
        <h2>Arenda Settings</h2>
        <?php
        settings_fields('pluginPage');
        do_settings_sections('pluginPage');
        submit_button();
        ?>
    </form>
    <?php
}


function the_breadcrumb() {
    global $post;
    echo '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li class="breadcrumb__item"><a href="' . get_option('home') . '" class="breadcrumb__link">Главная</a></li>';
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb__item">';
            the_category(' </li><li class="breadcrumb__item"> ');
            if (is_single()) {
                echo '</li><li class="breadcrumb__item breadcrumb__item--current"><span class="breadcrumb__link">' . get_the_title() . '</span></li>';
            }
        } elseif (is_page() && $post->post_parent) {
            $home = get_page_by_title('Home');
            for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
                if (($home->ID) != ($post->ancestors[$i])) {
                    echo '<li class="breadcrumb__item"><a href="' . get_permalink($post->ancestors[$i]) . '" class="breadcrumb__link">' . get_the_title($post->ancestors[$i]) . '</a></li>';
                }
            }
            echo '<li class="breadcrumb__item breadcrumb__item--current"><span class="breadcrumb__link">' . get_the_title() . '</span></li>';
        } else {
            echo '<li class="breadcrumb__item breadcrumb__item--current"><span class="breadcrumb__link">' . get_the_title() . '</span></li>';
        }
    } elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Archive for "; the_time('F jS, Y'); echo '</li>';}
    elseif (is_month()) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Archive for "; the_time('F, Y'); echo '</li>';}
    elseif (is_year()) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Archive for "; the_time('Y'); echo '</li>';}
    elseif (is_author()) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Author Archive"; echo '</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Blog Archives"; echo '</li>';}
    elseif (is_search()) {echo "<li class='breadcrumb__item breadcrumb__item--current'>Search Results"; echo '</li>';}
    echo '</ol></nav>';
}
function register_footer_menus() {
    register_nav_menus(array(
        'footer_menu_1' => __('Footer Menu 1', 'your-theme-textdomain'),
        'footer_menu_2' => __('Footer Menu 2', 'your-theme-textdomain'),
        'footer_menu_3' => __('Footer Menu 3', 'your-theme-textdomain'),
        'footer_menu_4' => __('Footer Menu 4', 'your-theme-textdomain'),
    ));
}
add_action('init', 'register_footer_menus');

function footer_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Social Icons', 'your-theme-textdomain'),
        'id'            => 'footer_social_icons',
        'before_widget' => '<div class="footer__social-icons">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Contact Info', 'your-theme-textdomain'),
        'id'            => 'footer_contact_info',
        'before_widget' => '<div class="footer__contact-info">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'footer_widgets_init');
