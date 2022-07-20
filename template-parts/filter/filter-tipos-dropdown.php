<?php

if ($tipos = get_terms(
  array(
    'taxonomy' => 'tipos',
    'orderby' => 'name',
    'order' => 'DESC',
  )
)) :

?>

    <select id="select-tipo">
      <?php foreach ($tipos as $tipo) : ?>
        <option data-type="tipos" data-id="<?= $tipo->slug; ?>" value="<?= $tipo->name; ?>" <?php if ($tipo->name == 'Alquiler') echo ' selected'; ?>>
          <?= $tipo->name; ?>
        </option>

    <?php
      endforeach;
      wp_reset_postdata();
    endif;
    ?>

    </select>
