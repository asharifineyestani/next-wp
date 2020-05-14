<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php
wp_body_open();
?>
<header class="app-header app-header-1">
    <div class="container">
        <div class="header-wrap">
            <div class="header-left">
                <div class="header-logo">
                    <a href="/"> افرانکست</a>
                </div>
            </div>
            <div class="header-right">
                <div class="header-menu">
                    <ul>
                        <li key={index}>
                            <a href="/b">وبلاگ</a>
                        </li>
                    </ul>
                </div>

                <a href="/login">
                    <button class="button button-md button-line-dark button-radius">
                        ورود
                    </button>
                </a>
            </div>
        </div>
    </div>
</header>
