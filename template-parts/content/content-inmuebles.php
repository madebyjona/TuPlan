<div class="inmuebles__preview">

  <div id="filter-dropdown" class="accordion">
    <h3>Filtros</h3>
    <span>🡳</span>
  </div>

  <div class="inmuebles__sidebar categories">
    <ul>
      <li class="section-filter">
        <h5><a href="<?= home_url() . '/inmuebles'; ?>">Ver todos</a></h5>
      </li>
      <input type="hidden" id="filters-tipos" />
      <input type="hidden" id="filters-propiedad" />
      <input type="hidden" id="filters-zonas" />
      <?php
      get_template_part('template-parts/filter/filter', 'tipos');
      get_template_part('template-parts/filter/filter', 'propiedad');
      get_template_part('template-parts/filter/filter', 'zonas');
      get_template_part('template-parts/filter/filter', 'price');
      ?>

    </ul>
  </div>

  <div id="main-product-list">
    <div class="row">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'inmueble',
        'posts_per_page' => 999,
        'post_status'  => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          echo '<div>';
          get_template_part('template-parts/content/content', 'list-item');
          echo '</div>';
        endwhile;
      endif;

      cpt_pagination($query->max_num_pages);

      wp_reset_postdata();

      ?>
      <div id="result-count"></div>
    </div>

  </div>

</div>