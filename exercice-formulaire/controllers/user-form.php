<?php

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password_confirm'];

// Vérification des mots de passe
if ($password === $passwordConfirm) {
    echo 'Vérification des mots de passe : OK';
} else {
    echo 'Vérification des mots de passe : NOK';
}

echo '<br>';

// Affichage avec vérification newsletter
if (isset($_POST['newsletter'])) {
    echo 'Email : '.$email.' | Mot de passe : '.$password.' | Newsletter : Oui';
} else {
    echo 'Email : '.$email.' | Mot de passe : '.$password.' | Newsletter : Non';
}
