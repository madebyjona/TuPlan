<div class="inmueble__card">
  <div class="inmueble__image">
    <a  href="<?php the_permalink() ?>">
      <?php the_post_thumbnail("post-thumbnail") ?>
    </a>
  </div>
  <div class="inmueble__caption">
    <div class="inmueble__desc">
      <div class="top-data">
        <div>
          <div class="inmueble__total">
            <span class="inmueble__price">
              <?php 
              $currency = get_post_meta($post->ID, '_tp_currency', true);
              $price = get_post_meta($post->ID, '_tp_price', true);
              if ($price) {
                $price_number = number_format($price, 0, ",", ".");
                print $currency.' '.$price_number;
              } else {
                print ('$ Consultar');
              }
              ?>
            </span>
            <?php
            $expenses = get_post_meta($post->ID, '_tp_expenses', true);
            if ($expenses) {
              $expenses_number = number_format($expenses, 0, ",", ".");
              print(' <span class="inmueble__expenses">' . $expenses_number . '</span>');
            }
            ?>
          </div>
        </div>
        <div>
        <span class="inmueble__date">
            <?php 
              $date = get_the_date('d/m/Y');
              if ($date) {
                print $date;
              }
            ?>
          </span>
          <span class="inmueble__operation">
            <?php
            $terms  = wp_get_object_terms($post->ID, 'tipos', $args);
            if ($terms) {
              foreach ($terms as &$term) {
                $name = $term->name;
                $link = get_term_link($term);
                print('<span>' . $name . '</span>');
              };
            }
            ?>
          </span>
          
        </div>
      </div>
      <div class="inmueble__assets">
        <?php $bedrooms = get_post_meta($post->ID, '_tp_bedrooms', true);
          if ($bedrooms) {
            print('<span class="inmueble__bedrooms">' . $bedrooms . ' Dorm </span>');
          };
        ?>
        <?php $bathrooms = get_post_meta($post->ID, '_tp_bathrooms', true);
          if ($bathrooms == '1') {
            print('<span class="inmueble__bathrooms">' . $bathrooms . ' Baño </span>');
          } else if ($bathrooms)  {
            print('<span class="inmueble__bathrooms">' . $bathrooms . ' Baños </span>');
          };
        ?>
        <?php $meters = get_post_meta($post->ID, '_tp_meters', true);
          if ($meters) {
            print('<span class="inmueble__meters">' . $meters . ' m² </span>');
          };
        ?>
      </div>
      <a  href="<?php the_permalink() ?>">
        <h4 class="inmueble__title"><?php the_title(); ?></h4>
      </a>
      <div class="inmueble__description">
        <span><?php print(get_post_meta($post->ID, '_tp_description', true)) ?><span>
      </div>
      <div class="bottom_data">

          <div class="inmueble__location">
            <?php
            $args = [
              'orderby' => 'parent',
              'order'   => 'DESC'
            ];
            $terms  = wp_get_object_terms($post->ID, 'zonas', $args);

            foreach ($terms as &$term) {
              $name = $term->name;
              $link = get_term_link($term);
              print('<span>' . $name . '</span>');
            };
            ?>
          </div>
  
          <a class="btn btn-border" href="<?php the_permalink() ?>">Ver más</a>
     
      </div>
    </div>
  </div>
</div>