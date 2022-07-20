<li class="section-filter">

  <h5>Zona</h5>

  <ul class="list_categories">

    <?php

    if ($zonas = get_terms(
      array(
        'taxonomy' => 'zonas',
        'orderby' => 'name',
        'order' => 'DESC',
        'parent' => 0
      )
    )) :

      foreach ($zonas as $zona) : ?>
        <li class="check-container parent-item">
          <a class="filter-link" id="<?= $zona->slug; ?>" href="javascript:;" data-type="zonas" data-id="<?= $zona->slug; ?>">
            <span class="checkmark"></span>
            <?= $zona->name; ?>
          </a>
        </li>

        <? if ($zonas = get_terms(
          array(
            'taxonomy' => 'zonas',
            'orderby' => 'name',
            'order' => 'DESC',
            'parent' => $zona->term_taxonomy_id
          )
        )) :

          foreach ($zonas as $zona) : ?>
            <li class="check-container">
              <a class="filter-link" id="<?= $zona->slug; ?>" href="javascript:;" data-type="zonas" data-id="<?= $zona->slug; ?>">
                <span class="checkmark"></span>
                <?= $zona->name; ?>
              </a>
            </li>
    <?php endforeach;
        endif;

      endforeach;
      wp_reset_postdata();
    endif;

    ?>

  </ul>

</li>