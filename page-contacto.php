<?php get_header(); ?>

<div id="contact">
  <div class="banner" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/banner-contacto.webp)">
    <img src="<? print get_template_directory_uri() ?>/assets/img/title-contacto.webp" alt="CONTACTO">
  </div>

  <div class="tp-container">
   
        <div class="contact-info">
          <ul class="contact-list">
            <h3>Redes sociales</h3>
            <li>
              <a href="https://wa.me/59895888999" >
                <img src="<? print get_template_directory_uri() ?>/assets/img/tp-whatsapp.svg">
                (+598) 95 888 999
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/tuplaninmobiliario.uy/">
                <img src="<? print get_template_directory_uri() ?>/assets/img/tp-instagram.svg">
                @tuplaninmobiliario.uy
              </a>
            </li>
            <li>
              <a href="https://m.facebook.com/TuPlanInmobiliariouy-107815474771906/?ref=py_c">
                <img src="<? print get_template_directory_uri() ?>/assets/img/tp-facebook.svg">
                @TuPlanInmobiliarioUy
              </a>
            </li>

            <h3>Información de contacto</h3>
            <li>
              <img src="<? print get_template_directory_uri() ?>/assets/img/tp-smartphone-gray.svg">
              (+598) 95 888 999
            </li>
            <li>
              <img src="<? print get_template_directory_uri() ?>/assets/img/tp-envelope-gray.svg">
              contacto@tuplan.uy
            </li>
            <li>
              <img src="<? print get_template_directory_uri() ?>/assets/img/tp-location-gray.svg">
              Montevideo, Uruguay
            </li>
          </ul>
        </div>
      
        <form id="contact-form" action="<?php the_permalink(); ?>#contact-form" method="post">
          <h3>Formulario de contacto</h3>
          <?php echo $response; ?>
          <input class="form-control" type="text" name="tp_message_name" value="<?php echo esc_attr($_POST['tp_message_name']); ?>" placeholder="Nombre*">
          <input class="form-control" name="tp_message_email" value="<?php echo esc_attr($_POST['tp_message_email']); ?>" placeholder="Email*" type="email">
          <input class="form-control" name="tp_message_phone" value="<?php echo esc_attr($_POST['tp_message_phone']); ?>" placeholder="Télefono*" type="number">
          <textarea class="form-control" placeholder="Mensaje*" rows="6" name="tp_message_text"><?php echo esc_textarea($_POST['tp_message_text']); ?></textarea>
          <input class="form-control" id="verification" name="tp_message_human" type="text" placeholder="5-3=?">
          <input type="hidden" name="submitted" value="1">
          <button type="submit" class="btn">Enviar</button>
        </form>
     

    </div>
  </div>
</div>




<?php get_footer(); ?>