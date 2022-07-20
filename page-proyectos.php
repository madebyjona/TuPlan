<?php get_header(); ?>


<div class="item-page" id="project">


  <div id="main-product-list">
    <div class="tp-container  main-info">
      <?php
      $title = get_the_title();
      print('<h1>' . $title . '</h1>');
      ?>
      <p>Henko park es un desarrollo que apunta a la calidad y a la importancia de las terminaciones, ya que cada detalle hace la diferencia. Con un diseño minimalista, busca resaltar la nobleza de los materiales de manera limpia y armoniosa. Ubicado Cordón, contiguo al corazón de la ciudad de Montevideo, en una zona cultural por excelencia.</p>
      <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/banner.webp">
      <div class="assets-container">
        <div class="asset-item">
          <div class="asset-image">
            <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/bed.webp">
          </div>
          <p>Apartamentos de 1, 2 y 3 dormitorios</p>
        </div>
        <div class="asset-item">
          <div class="asset-image">
            <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/grill.webp">
          </div>
          <p>Todos incluyen terraza y parrillero</p>
        </div>
        <div class="asset-item">
          <div class="asset-image">
            <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/key.webp">
          </div>
          <p>Fecha de Entrega: Agosto 2023</p>
        </div>
      </div>
    </div>

    <div class="tp-container rooms">

        <h3>Brindamos los mejores espacios</h3>
        <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/mejores-espacios.webp">
          <p>El edificio cuenta con 40 unidades, de las cuales 36 son de 1 dormitorio, 3 de 2 dormitorios y 1 penthouse. En todos ellos encontrará espacios amplios y luminosos, con terraza propia y parrillero.</p>

    </div>
    <div class="tp-container options">

        <h3>Conoce lo mejor</h3>
        <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/opciones.webp">

    </div>
    <div class="tp-container services">

        <h3>Ofrecemos practicidad</h3>
        <ul class="services">
          <li>
            <div class="service-image">
              <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/grill-2.webp">
            </div>
            Terraza propia y parrillero.
          </li>
          <li>
            <div class="service-image">
              <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/security.webp">
            </div>
            Servicio de portería digital y control de acceso.
          </li>
          <li>
            <div class="service-image">
              <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/expenses.webp">
            </div>
            Bajo costos de gastos comunes.
          </li>
          <li>
            <div class="service-image">
              <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/bus.webp">
            </div>
            Excelente transporte y conectividad.
          </li>
          <li>
            <div class="service-image">
              <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/tracing.webp">
            </div>
            Seguimiento del proyecto online.
          </li>
        </ul>

        <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/vivienda-promovida.webp">


    </div>
    <div class="tp-container ubication">

        <h3>Ecelente Ubicación</h3>
        <p>
          El edificio se encuentra en Cordón, donde late el nuevo Montevideo. Una zona cultural por excelencia, debido a su cercanía con universidades, librerías emblemáticas, mercados, parques, teatros, salas de exposiciones y centros comerciales. Cuenta con un amplio panorama gastronómico y arquitectónico que creció considerablemente en los últimos años. Es una zona que está llena de vida y en permanente transformación.
        </p>
        <div class="ubication-image">
          <image src="<?php echo get_template_directory_uri() ?>/assets/img/henko/ubicacion.webp">
        </div>

    </div>
  </div>


  <?php get_template_part('template-parts/content/content', 'contact-sidebar', $args ) ?>

</div>


<?php get_footer(); ?>