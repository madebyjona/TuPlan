<?php

if ($zonas = get_terms(
  array(
    'taxonomy' => 'zonas',
    'orderby' => 'name',
    'order' => 'DESC',
    'parent' => 0
  )
)) :

?>

    <select id="select-zona">
      <?php foreach ($zonas as $zona) : ?>
        <option data-type="zonas" data-id="<?= $zona->slug; ?>" value="<?= $zona->name; ?>" <?php if ($zona->name == 'Montevideo') echo ' selected'; ?>>
          <?= $zona->name; ?>
        </option>

    <?php
      endforeach;
      wp_reset_postdata();
    endif;
    ?>

    </select>
