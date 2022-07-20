<?php get_header(); ?>

<div id="home">
  <div class="banner" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/banner-home.webp)">
    <div class=" banner-content">
      <h1>Tu plan inmobiliario esta aquí</h1>

      <form>

        <div class="home-filter">
          <?php get_template_part('template-parts/filter/filter', 'tipos-dropdown'); ?>
        </div>
        <div class="home-filter">
          <?php get_template_part('template-parts/filter/filter', 'propiedad-dropdown'); ?>
        </div>
        <div class="home-filter">
          <?php get_template_part('template-parts/filter/filter', 'zonas-dropdown'); ?>
        </div>
        <div class="home-filter">
          <button class="btn" id="filter-link-home" type="button">Buscar</button>
        </div>

      </form>

      <h3>Alquiler, venta, y adminsitración de inmuebles.</h3>

    </div>
  </div>

  <div id="services-home">
    <div class="tp-container">
      <div class="services-container">
        <div class="services-image">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/image-servicios-home.webp">
        </div>

        <div class="services-text">
          <li>
            <div class="service-title">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-check.svg">
              <h3>Administración de Edificios</h3>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </li>
          <li>
            <div class="service-title">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-check.svg">
              <h3>Administración de Unidades</h3>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </li>
          <li>
            <div class="service-title">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-check.svg">
              <h3>Gestión de Compra y Venta de Propiedades</h3>
            </div>
            <p>Nos encargamos de publicar, publicitar, tratar con los potenciales compradores/vendedores de la propuiedad y tramitar su transacción.</p>
          </li>
          <li>
            <div class="service-title">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-check.svg">
              <h3>Asesoramiento Jurídico - Notarial</h3>
            </div>
            <p>Brindamos asesoría jurídica - notarial por parte de abogados y escribanos.</p>
          </li>
          <li>
            <div class="service-title">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-check.svg">
              <h3>Garantías de Alquiler y Seguro de Hogar</h3>
            </div>
            <p>Ofrecemos garantías de alquiler y seguro de hogar de las reconocidas aseguradoras Porto y MAPFRE</p>
          </li>
        </div>

      </div>
    </div>
  </div>

  <div id="last-inmuebles">
    <h3>Últimos inmuebles</h3>
    <div class="tp-container">

    <div class="inmuebles-container">


        <?php
        $args = array(
          'post_type' => 'inmueble',
          'posts_per_page' => 4,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            echo '<div class="inmueble-item">';
            get_template_part('template-parts/content/content', 'list-item');
            echo '</div>';
          endwhile;
        endif;
        wp_reset_postdata();

        ?>
        <div id="result-count"></div>
        </div>
      <a class="btn btn-all" href="/inmuebles">Ver todos los inmuebles</a>
    </div>
  </div>
</div>


<?php get_footer(); ?>