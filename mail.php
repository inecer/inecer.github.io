<?php

$recepient = "iliannecer93@gmail.com";
$sitename = "Ilian Necer";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Nom: $name \nEmail: $email \nMessage: $text";

$pagetitle = "Nouveau message de \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");