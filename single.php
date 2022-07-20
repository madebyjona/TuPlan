<?php get_header() ?>

<?php the_content(); ?>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php the_content(); ?>
  </div>

</div>

<div class="item-page">


    <div id="main-product-list">
        <div class="inmueble__location">
            <span>
                <?php
                $args = [
                    'orderby' => 'parent',
                    'order'   => 'ASC'
                ];
                $terms  = wp_get_object_terms($post->ID, 'zonas', $args);
                if ($terms) {
                    foreach ($terms as &$term) {
                        $name = $term->name;
                        $link = get_term_link($term);
                        print('<span>' . $name . '</span>');
                    };
                }
                $address = get_post_meta($post->ID, '_tp_address', true);
                if ($address) {
                    print('<span>' . $address . '</span>');
                }
                ?>
            </span>
        </div>
        <?php
        $title = get_the_title();
        if ($address) {
            print('<h1>' . $title . '</h1>');
        }

        ?>

        <div class="main-info">
            

                <?php
                $terms  = wp_get_object_terms($post->ID, 'tipos', $args);
                foreach ($terms as &$term) {
                    $name = $term->name;
                    $link = get_term_link($term);
                    print('<span class="inmueble__type">' . $name . '</span>');
                };
                ?>


                <?php
                $currency = get_post_meta($post->ID, '_tp_currency', true);
                $price = get_post_meta($post->ID, '_tp_price', true);
                if ($price) {
                    $price_number = number_format($price, 0, ",", ".");
                    print('<span class="inmueble__price">' . $currency . ' ' . $price_number . '</span>');
                } else {
                    print('<span class="inmueble__price">$ Consultar</span>');
                }

                $expenses = get_post_meta($post->ID, '_tp_expenses', true);
                if ($expenses) {
                    $expenses_number = number_format($expenses, 0, ",", ".");
                    print(' <span class="inmueble__expenses">' . $expenses_number . 'G.C.</span>');
                }
                ?>
            
        </div>

        <div class="inmueble__assets">
            <?php
            $bedrooms = get_post_meta($post->ID, '_tp_bedrooms', true);
            if ($bedrooms == '1') {
                print('<div><span class="inmueble__bedrooms">' . $bedrooms . ' Dormitorio </span></div>');
            } else if ($bedrooms) {
                print('<div><span class="inmueble__bedrooms">' . $bedrooms . ' Dormitorios </span></div>');
            };

            $bathrooms = get_post_meta($post->ID, '_tp_bathrooms', true);
            if ($bathrooms == '1') {
                print('<div><span class="inmueble__bathrooms">' . $bathrooms . ' Baño </span></div>');
            } else if ($bathrooms) {
                print('<div><span class="inmueble__bathrooms">' . $bathrooms . ' Baños </span></div>');
            };

            $meters = get_post_meta($post->ID, '_tp_meters', true);
            if ($meters) {
                print('<div><span class="inmueble__meters"> Área edificada: ' . $meters . ' m² </span></div>');
            };

            $totalmeters = get_post_meta($post->ID, '_tp_totalmeters', true);
            if ($totalmeters) {
                print('<div><span class="inmueble__totalmeters"> Área total: ' . $totalmeters . ' m² </span></div>');
            };

            $floors = get_post_meta($post->ID, '_tp_floors', true);
            if ($floors) {
                print('<div><span class="inmueble__floors"> Plantas inmueble: ' . $floors . ' </span></div>');
            };

            $year = get_post_meta($post->ID, '_tp_year', true);
            if ($year) {
                print('<div><span class="inmueble__year"> Año construcción: ' . $year . ' </span></div>');
            };

            $condition = get_post_meta($post->ID, '_tp_condition', true);
            if ($condition) {
                print('<div><span class="inmueble__condition "> Estado: ' . $condition . ' </span></div>');
            };

            $on = get_post_meta($post->ID, '_tp_on', true);
            if ($on) {
                print('<div><span class="inmueble__on"> Sobre: ' . $on . ' </span></div>');
            };

            $floor = get_post_meta($post->ID, '_tp_floor', true);
            if ($floor) {
                print('<div><span class="inmueble__floor"> Número de piso: ' . $floor . ' </span></div>');
            };

            $position = get_post_meta($post->ID, '_tp_position', true);
            if ($position) {
                print('<div><span class="inmueble__position"> Disposición: ' . $position . ' </span></div>');
            };

            $orientation = get_post_meta($post->ID, '_tp_orientation', true);
            if ($orientation) {
                print('<div><span class="inmueble__orientation"> Orientación: ' . $orientation . ' </span></div>');
            };

            $hight = get_post_meta($post->ID, '_tp_hight', true);
            if ($hight) {
                print('<div><span class="inmueble__hight"> Pisos de edificio: ' . $hight . ' </span></div>');
            };

            $apartments = get_post_meta($post->ID, '_tp_apartments', true);
            if ($apartments) {
                print('<div><span class="inmueble__apartments"> Aptos. por piso:' . $apartments . ' </span></div>');
            };
            ?>
        </div>



        <?php
        $description = get_post_meta($post->ID, '_tp_description', true);
        if ($description) {
            print('<p class="inmueble-description">' . $description . '</p>');
        }

        $features = get_post_meta($post->ID, '_tp_features', true);
        if ($features) {
            print('<h3>Características</h3><div class="features-list">');
            foreach ($features as $key) {
                print('
                    <div>
                        <img src="' . get_template_directory_uri() . '/assets/img/tp-check.svg">
                        <span>' . $key . '</span>
                    </div>
                ');
            }
            print(' </div>');
        }
        $warranty = get_post_meta($post->ID, '_tp_warranty', true);
        if ($warranty) {
            print('<h3>Garantías aceptadas</h3><div class="features-list">');
            foreach ($warranty as $key) {
                print('
                            <div>
                                <img src="' . get_template_directory_uri() . '/assets/img/tp-check.svg">
                                <span>' . $key . '</span>
                            </div>
                        ');
            }
            print(' </div>');
        }

        $description_sec = get_post_meta($post->ID, '_tp_description_sec', true);
        if ($description_sec) {
            print('<p class="inmueble-description">' . $description_sec . '</p>');
        }
        ?>

    </div>

    <?php get_template_part('template-parts/content/content', 'contact-sidebar', $args );  ?>

</div>











<?php get_footer(); ?>