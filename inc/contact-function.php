<?php 

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message)
{

  global $response;
  if ($type == "success") $response = "<div class='alert alert-success'>{$message}</div>";
  else $response = "<div class='alert alert-danger'>{$message}</div>";
}

//response messages
$not_human       = "Por favor, haz la cuenta.";
$missing_content = "Por favor llena todos los campos requeridos en el formulario.";
$email_invalid   = "El email es invalido.";
$message_unsent  = "El mensaje no se envio. Intenta de nuevo por favor.";
$message_sent    = "Gracias! Su mensaje ha sido enviado con éxito.";

//user posted variables
$name = $_POST['tp_message_name'];
$email = $_POST['tp_message_email'];
$phone = $_POST['tp_message_phone'];
$message = $_POST['tp_message_text'];
$human = $_POST['tp_message_human'];

//php mailer variables
$to = "contacto@tuplan.uy";
$subject = "Mensaje de tuplan.uy";
$headers = 'From: ' . $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";
$content= "$name ha enviado un mensaje desde el sitio web tuplan.uy\n"
  . "\n"
  . "Nombre: $name\n"
  . "Telefono: $phone\n"
  . "Correo: $email\n"
  . "Mensaje: $message\n"
  . "\n"; 

if (!$human == 0) {
  if ($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {

    //validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
      //validate presence of name and message
      if (empty($name) || empty($message) || empty($phone) ) {
        my_contact_form_generate_response("error", $missing_content);
      } else //ready to go!
      {
        $sent = wp_mail($to, $subject, strip_tags($content), $headers);
        if ($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
} else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
