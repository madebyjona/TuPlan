<?php

if ($propiedad = get_terms(
  array(
    'taxonomy' => 'propiedad',
    'orderby' => 'name',
    'order' => 'DESC',
  )
)) :

?>
  
    <select id="select-propiedad">
      <?php foreach ($propiedad as $prop) : ?>
        <option data-type="tipos" data-id="<?= $prop->slug; ?>" value="<?= $prop->name; ?>" <?php if ($prop->name == 'Apartamento') echo ' selected'; ?>>
          <?= $prop->name; ?>
        </option>

    <?php
      endforeach;
      wp_reset_postdata();
    endif;
    ?>

    </select>
