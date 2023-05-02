<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["exampleInputEmail1"];
  $message = $_POST["exampleFormControlTextarea1"];
  
  $to = "thomasgossetbazin@gmail.com";
  $subject = "Nouveau message depuis votre site web";
  $body = "Email: $email\nMessage:\n$message";
  
  if (mail($to, $subject, $body)) {
    echo "Votre message a été envoyé avec succès.";
  } else {
    echo "Une erreur s'est produite lors de l'envoi de votre message.";
  }
}
?>
