<li class="section-filter">

  <h5>Precio</h5>

  <ul class="list_categories">

    <form action="#" id="form-price">
      <input type="number" id="price_min" step="1" pattern="\d*" name="price_min" placeholder="Min $" value="<?php echo esc_attr($_POST['price_min']); ?>" />
      <input type="number" id="price_max" step="1" pattern="\d*" name="price_max" placeholder="Max $" value="<?php echo esc_attr($_POST['price_max']); ?>" />
      <button class="btn submit-price" href="javascript:;">Aplicar</a>
    </form>

  </ul>

</li>