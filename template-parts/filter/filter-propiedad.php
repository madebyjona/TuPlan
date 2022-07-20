<li class="section-filter">

  <h5>Tipo de propiedad</h5>

  <ul class="list_categories">

    <?php

    if ($tipos = get_terms(
      array(
        'taxonomy' => 'propiedad',
        'orderby' => 'name',
        'order' => 'DESC',
      )
    )) :

      foreach ($tipos as $tipo) : ?>
        <li class="check-container parent-item">
          <a class="filter-link" id="<?= $tipo->slug; ?>" href="javascript:;" data-type="propiedad" data-id="<?= $tipo->slug; ?>">
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