
<?php
$title = get_the_title();
$link = get_the_permalink();
global $response;

$args= [
    'title' => $title,
    'link' => $link,
    'response' => $response,
];
?>

<div class="contact__sidebar">
    
    <form id="contact-form" action="<?php echo $link; ?>#contact-form" method="post">
        <h3>Contacto</h3>
        <?php echo $response; ?>
        <input class="form-control" type="text" name="tp_message_name" value="<?php echo esc_attr($_POST['tp_message_name']); ?>" placeholder="Nombre*">
        <input class="form-control" name="tp_message_email" value="<?php echo esc_attr($_POST['tp_message_email']); ?>" placeholder="Email*" type="email">
        <input class="form-control" name="tp_message_phone" value="<?php echo esc_attr($_POST['tp_message_phone']); ?>" placeholder="Télefono*" type="number">
        <textarea id="tp_message_text" class="form-control" placeholder="Mensaje*" rows="6" name="tp_message_text"><?php if (isset($_POST['message'])) { echo esc_textarea($_POST['tp_message_text']); } else { print('Estoy interesado/a en ' . $title . ', me gustaría que me llamen para concretar una visita.'); } ?></textarea>
        <input class="form-control" id="verification" name="tp_message_human" type="text" placeholder="5-3=?">
        <input type="hidden" name="submitted" value="1">
        <button type="submit" class="btn">Enviar</button>
    </form>
    <hr>
    <ul class="contact-list">
        <li><a href="https://wa.me/59895888999" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/tp-whatsapp.svg">Mandar WhatsApp</a></li>
    </ul>
</div>