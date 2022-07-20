<header id="encabezado">
    <div class="tp-container">

        <div class="enbezado__logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="encabezado__hamburguesa">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-menu.svg" alt="menu icon">
            </a>
        </div>
        <div class="encabezado__menu">
            <?php wp_nav_menu(
                array(
                    "menu" => 'menu-principal'
                )
            ); ?>
        </div>
    </div>
    <div class="encabezado__menu-responsive">
        <?php wp_nav_menu(
            array(
                "menu" => 'menu-responsive'
            )
        ); ?>
    </div>
</header>