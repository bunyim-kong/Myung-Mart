<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/image/logo.png'; ?>" /></a>
            </div>

            <div class="nav-links">
                <ul>
                    <li><a class="active" href="">Home</a></li>
                    <li><a href="">Category</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>

            <div class="nav-btn">
                <a href=""><i class="material-symbols-outlined">shopping_bag</i></a>
                <a href=""><i class="material-symbols-outlined">dark_mode</i></a>
                <a href=""><i class="material-symbols-outlined">person</i></a>
            </div>
        </nav>
    </header>
</body>
