<?php
if(isset($_POST['email']) && $_POST['email'] == "") {
    $email = $_POST['email'];
} else {
    $email = NULL;
}

$destinataire = $email;

$objet = 'Mot de passe oublé';

$entetes .= 'MIME-Version: 1.0';
$entetes .= 'Content-Type: multipart/mixed; ';

$message .= '';
$message .= '!DOCTYPE html';
$message .= 'html lang="fr"';
$message .= '<head>';
$message .= 'meta charset ="utf-8"';
$message .= '<title>Réinitialiser de votre mot de passe</title>';

$message .= '</head>';
$message .= '<body>';

$message .= '<h2> Mot de passe oublié </h2>';
$message .= '<p> Voici le lien pour réinitialiser votre mot de passe: </p>';
$message .= '<a href="#"> Le lien </a>';

$message .= '</body>';
$message .= '</html>';

$envoie = mail($destinataire, $objet, $message, $entetes);

echo 'Email envoyé à ' . $destinataire;
?>