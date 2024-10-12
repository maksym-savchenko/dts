<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_action('login_enqueue_scripts', function () {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

    if ($logo_url) {
        echo '
        <style type="text/css">
            #login h1 a {
                background-image: url(' . esc_url($logo_url) . ');
                background-size: contain;
                width: 100%;
                height: 120px;
            }
        </style>
        ';
    }
});

add_action('login_enqueue_scripts', function () {
    ?>
    <style type="text/css">
        .login {
            background-color: #272F27;
        }

        /* Кастомізація форми */
        #loginform {
            background: #131713;
            padding: 20px;
            border-radius: 10px;
        }

        #loginform label {
            color: #ffffff;
        }

        /* Кнопка логіну */
        #loginform .button-primary {
            background-color: #ffee00;
            border-color: #ffee00;
            text-shadow: none;
            color: #131713;
        }

        #loginform .button-primary:hover {
            background-color: #131713;
            color: #ffee00;
        }

        /* Кастомні стилі полів */
        .login input[type="text"],
        .login input[type="password"] {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
        }

        /* Кастомізація лінків */
        .login #nav a, .login #backtoblog a {
            color: #333;
        }

        .login #nav a:hover, .login #backtoblog a:hover {
            color: #4CAF50;
        }
    </style>
    <?php
});

add_filter( 'block_categories', function ($categories) {
    return array_merge(
        [
            [
                'slug' => 'btd',
                'title' => 'BTD blocks',
            ],
        ],
        $categories
    );
}, 10, 2);

add_action('template_redirect', function() {
    if (is_search()) {
        wp_redirect(home_url('/'));
        exit;
    }
});

add_filter( 'gform_submit_button', function ($button, $form) {
    $button__text = get_field('submit_button_text', 'option');
    return "<button class='form-submit-btn' id='gform_submit_button_{$form['id']}'>
              {$form['button']['text']}</button>
              <p class=''>$button__text</p>";
}, 10, 2 );

