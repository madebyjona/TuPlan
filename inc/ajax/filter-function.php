
<?php

function filter_products()
{
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $tipos = $_POST['tipos'];
  $propiedad = $_POST['propiedad'];
  $zonas = $_POST['zonas'];
  $price_min = $_POST['price_min'];
  $price_max = $_POST['price_max'];

  $args = [
    'post_type' => 'inmueble',
    'posts_per_page' => 3,
    'post_status'  => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
  ];

  if (count($tipos) > 1) {
    $args['tax_query'][] = [
      'taxonomy'      => 'tipos',
      'field'          => 'slug',
      'terms'         => $tipos,
      'operator'      => 'IN',
    ];
  }

  if (count($propiedad) > 1) {
    $args['tax_query'][] = [
      'taxonomy'      => 'propiedad',
      'field'          => 'slug',
      'terms'         => $propiedad,
      'operator'      => 'IN',
    ];
  }

  if (count($zonas) > 1) {
    $args['tax_query'][] = [
      'taxonomy'      => 'zonas',
      'field'          => 'slug',
      'terms'         => $zonas,
      'operator'      => 'IN',
    ];
  }

  if (isset($price_min) && $price_min || isset($price_max) && $price_max)
    $args['meta_query'] = array('relation' => 'AND'); 

  if (isset($price_min) && $price_min && isset($price_max) && $price_max) {
    $args['meta_query'][] = array(
      'key' => '_tp_price',
      'value' => array($price_min, $price_max),
      'type' => 'numeric',
      'compare' => 'between',
    );
  } else {
    if (isset($price_min) && $price_min)
      $args['meta_query'][] = array(
        'key' => '_tp_price',
        'value' => $price_min,
        'type' => 'numeric',
        'compare' => '>'
      );

    if (isset($price_max) && $price_max)
      $args['meta_query'][] = array(
        'key' => '_tp_price',
        'value' => $price_max,
        'type' => 'numeric',
        'compare' => '<'
      );
  }

  $ajaxproducts = new WP_Query($args);
  $response = "";
  $counter = "";

  if ($ajaxproducts->have_posts()) {
    ob_start();
    while ($ajaxproducts->have_posts()) : $ajaxproducts->the_post();
      $response .=  get_template_part('template-parts/content/content', 'list-item');
    endwhile;
    cpt_pagination($ajaxproducts->max_num_pages);
    $output = ob_get_contents();
    ob_end_clean();
  } else {
    ob_start();
    $response .= get_template_part('template-parts/content/content', 'no-items');
    $output = ob_get_contents();
    ob_end_clean();
  }

  $result = [
    'total' => $counter,
    'html' => $output,
  ];

  echo json_encode($result);

  wp_reset_postdata();
  exit;
}


add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');
