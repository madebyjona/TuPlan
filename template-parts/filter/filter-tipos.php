<li class="section-filter">

  <h5>Tipo de operación</h5>

  <ul class="list_categories">

    <?php

    if ($tipos = get_terms(
      array(
        'taxonomy' => 'tipos',
        'orderby' => 'name',
        'order' => 'DESC',
      )
    )) :

      foreach ($tipos as $tipo) : ?>
        <li class="check-container parent-item">
          <a class="filter-link" id="<?= $tipo->slug; ?>" href="javascript:;" data-type="tipos" data-id="<?= $tipo->slug; ?>">
            <span class="checkmark"></span>
            <?= $tipo->name; ?>
          </a>
        </li>
    <?php endforeach;
      wp_reset_postdata();
    endif;

    ?>

  </ul>

</li>