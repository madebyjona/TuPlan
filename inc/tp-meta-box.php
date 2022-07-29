<?php

function diwp_metabox_mutiple_fields()
{

  add_meta_box(
    'tp_meta_boxes',
    'Datos inmueble',
    'diwp_add_multiple_fields',
    'inmueble'
  );
}

add_action('add_meta_boxes', 'diwp_metabox_mutiple_fields');


function diwp_add_multiple_fields()
{

  global $post;

  $tp_currency = get_post_meta($post->ID, '_tp_currency', true);
  $tp_price = get_post_meta($post->ID, '_tp_price', true);;
  $tp_expenses = get_post_meta($post->ID, '_tp_expenses', true);
  $tp_description = get_post_meta($post->ID, '_tp_description', true);
  $tp_bedrooms = get_post_meta($post->ID, '_tp_bedrooms', true);
  $tp_bathrooms = get_post_meta($post->ID, '_tp_bathrooms', true);
  $tp_meters = get_post_meta($post->ID, '_tp_meters', true);
  $tp_totalmeters = get_post_meta($post->ID, '_tp_totalmeters', true);
  $tp_floors = get_post_meta($post->ID, '_tp_floors', true);
  $tp_year = get_post_meta($post->ID, '_tp_year', true);
  $tp_condition = get_post_meta($post->ID, '_tp_condition', true);
  $tp_address = get_post_meta($post->ID, '_tp_address', true);
  $tp_on = get_post_meta($post->ID, '_tp_on', true);
  $tp_floor = get_post_meta($post->ID, '_tp_floor', true);
  $tp_position = get_post_meta($post->ID, '_tp_position', true);
  $tp_orientation = get_post_meta($post->ID, '_tp_orientation', true);
  $tp_hight = get_post_meta($post->ID, '_tp_hight', true);
  $tp_apartments = get_post_meta($post->ID, '_tp_apartments', true);
  $tp_features = get_post_meta($post->ID, '_tp_features', true);
  $tp_warranty = get_post_meta($post->ID, '_tp_warranty', true);
  $tp_description_sec = get_post_meta($post->ID, '_tp_description_sec', true);

?>

  <style scoped>
    .inside {
      display: flex;
      flex-wrap: wrap;
    }

    .tp_meta_field {
      width: 33%;
      margin: 15px 0;
      padding: 10px;
      box-sizing: border-box;
    }

    .tp_meta_field.text-area,
    .tp-features {
      width: 100%;
    }


    .tp_label {
      display: block;
      font-size: 15px;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .tp_input,
    .tp_textarea {
      width: 100%;
    }

    .tp-features .label {
      margin-bottom: 15px;
    }

    .fields {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 10px;
      margin-top: 15px;
    }

    .fields label {
      margin-bottom: 15px;
    }

    label.currency {
      display: inline-block;
      padding: 10px;
    }
  </style>

  <div class="tp_meta_field text-area">
    <label class="tp_label" for="tp_description">Descripción principal</label>
    <textarea class="tp_textarea" name="tp_description" id="tp_description" class="postbox" rows="5"><?php print($tp_description) ?></textarea>
  </div>
  <div class="tp_meta_field">
    <div class="tp_label">Moneda</div>
    <label class="currency">
      <input type="radio" name="tp_currency" value="$" <?php checked($tp_currency, '$'); ?>>
      <?php esc_attr_e('$'); ?>
    </label>
    <label class="currency">
      <input type="radio" name="tp_currency" value="U$S" <?php checked($tp_currency, 'U$S'); ?>>
      <?php esc_attr_e('U$S'); ?>
    </label>
    <label class="currency">
      <input type="radio" name="tp_currency" value="€" <?php checked($tp_currency, '€'); ?>>
      <?php esc_attr_e('€'); ?>
    </label>
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_price">Precio alquiler o compra</label>
    <input class="tp_input" type="number" name="tp_price" id="tp_price" class="postbox" value=<?php print($tp_price) ?> <?php selected($tp_price) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_expenses">Gatos comunes</label>
    <input class="tp_input" type="number" name="tp_expenses" id="tp_expenses" class="postbox" value=<?php print($tp_expenses) ?> <?php selected($tp_expenses) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_meters">Metros cuadrados edificados</label>
    <input class="tp_input" type="number" name="tp_meters" id="tp_meters" class="postbox" value=<?php print($tp_meters) ?> <?php selected($tp_meters) ?> />
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_totalmeters">Metros cuadrados totales</label>
    <input class="tp_input" type="number" name="tp_totalmeters" id="tp_totalmeters" class="postbox" value=<?php print($tp_totalmeters) ?> <?php selected($tp_totalmeters) ?> />
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_floors">Cantidad de plantas</label>
    <input class="tp_input" type="number" name="tp_floors" id="tp_floors" class="postbox" value=<?php print($tp_floors) ?> <?php selected($tp_floors) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_bedrooms">Cantidad de dormitorios</label>
    <input class="tp_input" type="number" name="tp_bedrooms" id="tp_bedrooms" class="postbox" value=<?php print($tp_bedrooms) ?> <?php selected($tp_bedrooms) ?> />
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_bathrooms">Cantidad de baños</label>
    <input class="tp_input" type="number" name="tp_bathrooms" id="tp_bathrooms" class="postbox" value=<?php print($tp_bathrooms) ?> <?php selected($tp_bathrooms) ?> />
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_year">Año construcción</label>
    <input class="tp_input" type="number" name="tp_year" id="tp_year" class="postbox" value=<?php print($tp_year) ?> <?php selected($tp_year) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_condition">Estado</label>
    <select class="tp_input" name="tp_condition" id="tp_condition" class="postbox">
      <option value="" <?php selected($tp_condition, ''); ?>></option>
      <option value="En construcción" <?php selected($tp_condition, 'En construcción'); ?>> En construcción</option>
      <option value="Remodelado" <?php selected($tp_condition, 'Remodelado'); ?>> Remodelado </option>
      <option value="Reciclado" <?php selected($tp_condition, 'Reciclado'); ?>> Reciclado </option>
      <option value="Con detalles" <?php selected($tp_condition, 'Con detalles'); ?>> Con detalles </option>
      <option value="FBueno" <?php selected($tp_condition, 'Bueno'); ?>> Bueno </option>
      <option value="Muy bueno" <?php selected($tp_condition, 'Muy bueno'); ?>> Muy bueno </option>
      <option value="Excelente" <?php selected($tp_condition, 'Excelente'); ?>> Excelente </option>
    </select>
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_address">Dirección inmueble</label>
    <input class="tp_input" type="text" name="tp_address" id="tp_address" class="postbox" value="<?php print($tp_address) ?>" <?php selected($tp_address) ?> />
  </div>
  <div class="tp_meta_field">
    <label class="tp_label" for="tp_floor">Número de piso</label>
    <input class="tp_input" type="number" name="tp_floor" id="tp_floor" class="postbox" value=<?php print($tp_floor) ?> <?php selected($tp_floor) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_position">Disposición</label>
    <select class="tp_input" name="tp_position" id="tp_position" class="postbox">
      <option value="" <?php selected($tp_position, ''); ?>></option>
      <option value="No aplica" <?php selected($tp_position, 'No aplica'); ?>> No aplica </option>
      <option value="Frente" <?php selected($tp_position, 'Frente'); ?>> Frente </option>
      <option value="Frente / Costado" <?php selected($tp_position, 'Frente / Costado'); ?>> Frente / Costado</option>
      <option value="Costado" <?php selected($tp_position, 'Costado'); ?>> Costado </option>
      <option value="Costado / Contrafrente" <?php selected($tp_position, 'Costado / Contrafrente'); ?>> Costado / Contrafrente</option>
      <option value="Contrafrente" <?php selected($tp_position, 'Contrafrente'); ?>> Contrafrente </option>
      <option value="Frente / Contrafentre" <?php selected($tp_position, 'Frente / Contrafentre'); ?>> Frente / Contrafentre</option>
    </select>
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_orientation">Orientación</label>
    <select class="tp_input" name="tp_orientation" id="tp_orientation" class="postbox">
      <option value="" <?php selected($tp_orientation, ''); ?>></option>
      <option value="No aplica" <?php selected($tp_orientation, 'No aplica'); ?>> No aplica </option>
      <option value="Sur" <?php selected($tp_orientation, 'Sur'); ?>> Sur </option>
      <option value="Sureste" <?php selected($tp_orientation, 'Sureste'); ?>> Sureste </option>
      <option value="Este" <?php selected($tp_orientation, 'Este'); ?>> Este </option>
      <option value="Noreste" <?php selected($tp_orientation, 'Noreste'); ?>> Noreste </option>
      <option value="Norte" <?php selected($tp_orientation, 'Norte'); ?>> Norte </option>
      <option value="Noroeste" <?php selected($tp_orientation, 'Noroeste'); ?>> Noroeste</option>
      <option value="Oeste" <?php selected($tp_orientation, 'Oeste'); ?>> Oeste </option>
      <option value="Suroeste" <?php selected($tp_orientation, 'Suroeste'); ?>> Suroeste </option>
    </select>
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_on">Sobre</label>
    <select class="tp_input" name="tp_on" id="tp_on" class="postbox">
      <option value="" <?php selected($tp_on, ''); ?>></option>
      <option value="No aplica" <?php selected($tp_on, 'No aplica'); ?>> No aplica </option>
      <option value="Camino" <?php selected($tp_on, 'Camino'); ?>> Camino </option>
      <option value="Callejón" <?php selected($tp_on, 'Callejón'); ?>> Callejón </option>
      <option value="Calle" <?php selected($tp_on, 'Calle'); ?>> Calle </option>
      <option value="Avenida" <?php selected($tp_on, 'Avenida'); ?>> Avenida </option>
      <option value="Bulevar" <?php selected($tp_on, 'Bulevar'); ?>> Bulevar </option>
      <option value="Ruta" <?php selected($tp_on, 'Ruta'); ?>> Ruta</option>
    </select>
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_hight">Cantidad de pisos</label>
    <input class="tp_input" type="number" name="tp_hight" id="tp_hight" class="postbox" value=<?php print($tp_hight) ?> <?php selected($tp_hight) ?> />
  </div>

  <div class="tp_meta_field">
    <label class="tp_label" for="tp_apartments">Cantidad de apartamentos por piso</label>
    <input class="tp_input" type="number" name="tp_apartments" id="tp_apartments" class="postbox" value=<?php print($tp_apartments) ?> <?php selected($tp_apartments) ?> />
  </div>

  <div class="tp_meta_field tp-features">
    <div class="tp_label">Características</div>
    <div class="fields">
      <label><input type="checkbox" name="_tp_features[]" value="Semiamoblado" <?php if (in_array('Semiamoblado', $tp_features)) echo 'checked'; ?> /> Semiamoblado </label>
      <label><input type="checkbox" name="_tp_features[]" value="Amoblado" <?php if (in_array('Amoblado', $tp_features)) echo 'checked'; ?> /> Amoblado </label>
      <label><input type="checkbox" name="_tp_features[]" value="Entrepiso" <?php if (in_array('Entrepiso', $tp_features)) echo 'checked'; ?> /> Entrepiso </label>
      <label><input type="checkbox" name="_tp_features[]" value="Cocina" <?php if (in_array('Cocina', $tp_features)) echo 'checked'; ?> /> Cocina </label>
      <label><input type="checkbox" name="_tp_features[]" value="Kitchenette" <?php if (in_array('Kitchenette', $tp_features)) echo 'checked'; ?> /> Kitchenette </label>
      <label><input type="checkbox" name="_tp_features[]" value="Alacena" <?php if (in_array('Alacena', $tp_features)) echo 'checked'; ?> /> Alacena </label>
      <label><input type="checkbox" name="_tp_features[]" value="Despensa" <?php if (in_array('Despensa', $tp_features)) echo 'checked'; ?> /> Despensa</label>
      <label><input type="checkbox" name="_tp_features[]" value="Galpón" <?php if (in_array('Galpón', $tp_features)) echo 'checked'; ?> /> Galpón</label>
      <label><input type="checkbox" name="_tp_features[]" value="Garage" <?php if (in_array('Garage', $tp_features)) echo 'checked'; ?> /> Garage</label>
      <label><input type="checkbox" name="_tp_features[]" value="Balcón" <?php if (in_array('Balcón', $tp_features)) echo 'checked'; ?> /> Balcón</label>
      <label><input type="checkbox" name="_tp_features[]" value="Patio" <?php if (in_array('Patio', $tp_features)) echo 'checked'; ?> /> Patio</label>
      <label><input type="checkbox" name="_tp_features[]" value="Jardín" <?php if (in_array('Jardín', $tp_features)) echo 'checked'; ?> /> Jardín</label>
      <label><input type="checkbox" name="_tp_features[]" value="Parrillero" <?php if (in_array('Parrillero', $tp_features)) echo 'checked'; ?> /> Parrillero</label>
      <label><input type="checkbox" name="_tp_features[]" value="Terraza" <?php if (in_array('Terraza', $tp_features)) echo 'checked'; ?> /> Terraza</label>
      <label><input type="checkbox" name="_tp_features[]" value="Wifi" <?php if (in_array('Wifi', $tp_features)) echo 'checked'; ?> /> Wifi</label>
      <label><input type="checkbox" name="_tp_features[]" value="Aire acondicionado" <?php if (in_array('Aire acondicionado', $tp_features)) echo 'checked'; ?> />Aire acondicionado</label>
      <label><input type="checkbox" name="_tp_features[]" value="Calefacción central" <?php if (in_array('Calefacción central', $tp_features)) echo 'checked'; ?> /> Calefacción central</label>
      <label><input type="checkbox" name="_tp_features[]" value="Estufa a leña" <?php if (in_array('Estufa a leña', $tp_features)) echo 'checked'; ?> />Estufa a leña</label>
      <label><input type="checkbox" name="_tp_features[]" value="Calefón" <?php if (in_array('Calefón', $tp_features)) echo 'checked'; ?> />Calefón</label>
      <label><input type="checkbox" name="_tp_features[]" value="Reja perimetral" <?php if (in_array('Reja perimetral', $tp_features)) echo 'checked'; ?> /> Reja perimetral</label>
      <label><input type="checkbox" name="_tp_features[]" value="Seguridad" <?php if (in_array('Seguridad', $tp_features)) echo 'checked'; ?> /> Seguridad</label>
      <label><input type="checkbox" name="_tp_features[]" value="Alarma" <?php if (in_array('Alarma', $tp_features)) echo 'checked'; ?> /> Alarma</label>
      <label><input type="checkbox" name="_tp_features[]" value="Hall" <?php if (in_array('Hall', $tp_features)) echo 'checked'; ?> /> Hall</label>
      <label><input type="checkbox" name="_tp_features[]" value="Lavadero" <?php if (in_array('Lavadero', $tp_features)) echo 'checked'; ?> /> Lavadero</label>
      <label><input type="checkbox" name="_tp_features[]" value="Ascensor" <?php if (in_array('Ascensor', $tp_features)) echo 'checked'; ?> /> Ascensor</label>
      <label><input type="checkbox" name="_tp_features[]" value="Portería" <?php if (in_array('Portería', $tp_features)) echo 'checked'; ?> /> Portería</label>
      <label><input type="checkbox" name="_tp_features[]" value="Barrio privado" <?php if (in_array('Barrio privado', $tp_features)) echo 'checked'; ?> /> Barrio privado</label>
      <label><input type="checkbox" name="_tp_features[]" value="Vivienda Social" <?php if (in_array('Vivienda Social', $tp_features)) echo 'checked'; ?> /> Vivienda Social</label>
      <label><input type="checkbox" name="_tp_features[]" value="Acepta mascotas" <?php if (in_array('Acepta mascotas', $tp_features)) echo 'checked'; ?> /> Acepta mascotas</label>
    </div>
  </div>

  <div class="tp_meta_field tp-features">
    <div class="tp_label">Garantía</div>
    <div class="fields">
      <label><input type="checkbox" name="_tp_warranty[]" value="Sin garantía" <?php if (in_array('Sin garantía', $tp_warranty)) echo 'checked'; ?> /> Sin garantía</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Porto Seguro" <?php if (in_array('Porto Seguro', $tp_warranty)) echo 'checked'; ?> /> Porto Seguro</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Sancor Seguro" <?php if (in_array('Sancor Seguro', $tp_warranty)) echo 'checked'; ?> /> Sancor Seguro</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Anda" <?php if (in_array('Anda', $tp_warranty)) echo 'checked'; ?> /> Anda</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Sura" <?php if (in_array('Sura', $tp_warranty)) echo 'checked'; ?> /> Sura</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Mapfre" <?php if (in_array('Mapfre', $tp_warranty)) echo 'checked'; ?> /> Mapfre</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Contaduría" <?php if (in_array('Contaduría', $tp_warranty)) echo 'checked'; ?> /> Contaduría</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="BHU" <?php if (in_array('BHU', $tp_warranty)) echo 'checked'; ?> /> BHU</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="BBVA" <?php if (in_array('BBVA', $tp_warranty)) echo 'checked'; ?> /> BBVA</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Santander" <?php if (in_array('Santander', $tp_warranty)) echo 'checked'; ?> /> Santander</label>
      <label><input type="checkbox" name="_tp_warranty[]" value="Otra" <?php if (in_array('Otra', $tp_warranty)) echo 'checked'; ?> /> Otra</label>
    </div>
  </div>

  <div class="tp_meta_field text-area">
    <label class="tp_label" for="tp_description_sec">Descripción secundaria</label>
    <textarea class="tp_textarea" name="tp_description_sec" id="tp_description_sec" class="postbox" rows="5"><?php print($tp_description_sec) ?></textarea>
  </div>

<?php
}



function diwp_save_multiple_fields_metabox()
{

  global $post;

  if (array_key_exists('tp_currency', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_currency',
      $_POST['tp_currency']
    );
  }
  if (array_key_exists('tp_price', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_price',
      $_POST['tp_price']
    );
  }
  if (array_key_exists('tp_expenses', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_expenses',
      $_POST['tp_expenses']
    );
  }
  if (array_key_exists('tp_description', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_description',
      $_POST['tp_description']
    );
  }
  if (array_key_exists('tp_meters', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_meters',
      $_POST['tp_meters']
    );
  }
  if (array_key_exists('tp_totalmeters', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_totalmeters',
      $_POST['tp_totalmeters']
    );
  }
  if (array_key_exists('tp_floors', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_floors',
      $_POST['tp_floors']
    );
  }
  if (array_key_exists('tp_bedrooms', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_bedrooms',
      $_POST['tp_bedrooms']
    );
  }
  if (array_key_exists('tp_bathrooms', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_bathrooms',
      $_POST['tp_bathrooms']
    );
  }
  if (array_key_exists('tp_year', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_year',
      $_POST['tp_year']
    );
  }
  if (array_key_exists('tp_condition', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_condition',
      $_POST['tp_condition']
    );
  }

  if (array_key_exists('tp_address', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_address',
      $_POST['tp_address']
    );
  }
  if (array_key_exists('tp_on', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_on',
      $_POST['tp_on']
    );
  }
  if (array_key_exists('tp_floor', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_floor',
      $_POST['tp_floor']
    );
  }
  if (array_key_exists('tp_position', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_position',
      $_POST['tp_position']
    );
  }
  if (array_key_exists('tp_orientation', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_orientation',
      $_POST['tp_orientation']
    );
  }

  if (array_key_exists('tp_hight', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_hight',
      $_POST['tp_hight']
    );
  }
  if (array_key_exists('tp_apartments', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_apartments',
      $_POST['tp_apartments']
    );
  }

  if (isset($_POST["_tp_features"])) :
    update_post_meta(
      $post->ID,
      '_tp_features',
      $_POST["_tp_features"]
    );
  endif;

  if (isset($_POST["_tp_warranty"])) :
    update_post_meta(
      $post->ID,
      '_tp_warranty',
      $_POST["_tp_warranty"]
    );
  endif;


  if (array_key_exists('tp_description_sec', $_POST)) {
    update_post_meta(
      $post->ID,
      '_tp_description_sec',
      $_POST['tp_description_sec']
    );
  }
}

add_action('save_post', 'diwp_save_multiple_fields_metabox');
