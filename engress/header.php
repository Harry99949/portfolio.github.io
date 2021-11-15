<meta charset="utf-8" />
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="stylesheet" href="<?php bloginfo("template_url") ?>/css/styles.css" />
<link rel="icon" href="<?php echo esc_url(get_theme_file_uri("img/favicon.ico")); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php bloginfo("template_url") ?>/js/script.js"></script>
<?php wp_head(); ?>

<body>
    <header id="header">
        <div class="header-wrapper">
            <div class="header-left-side">
                <div class="logo-nav">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri("img/logo1.jpg")); ?>" alt="logo" /></a>
                </div>
                <?php
                if (has_nav_menu('nav')) {
                    $mainMenu = array(
                        'theme_location' => 'nav',
                        'menu_id' => 'nav',
                        'menu_class' => 'menu',
                        'container' => false,
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                        'depth' => 0,
                    );
                    wp_nav_menu($mainMenu);
                };
                ?>
            </div>
            <div class="header-right-side">
                <div class="open-time">
                    <div class="time">
                        <p>平日08:00～20:00</p>
                    </div>
                    <div class="phone-number">
                        <img src="<?php echo esc_url(get_theme_file_uri("img/Path 29.jpg")); ?>" alt="" />
                        <p>0123-456-7890</p>
                    </div>
                </div>
                <div class="claim">
                    <button type="button" name="claim" href="claim.php">
                        <a href="">資料請求</a>
                    </button>
                </div>
                <div class="contact">
                    <button type="button" name="contact" href="">
                        <?php
                        if (has_nav_menu('contact')) {
                            $mainMenu = array(
                                'theme_location' => 'contact',
                                'menu_id' => 'contact',
                                'menu_class' => 'contact',
                                'container' => false,
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                'depth' => 0,
                            );
                            wp_nav_menu($mainMenu);
                        };
                        ?>
                    </button>
                </div>
            </div>
            <div class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="mask"></div>
        </div>
    </header>