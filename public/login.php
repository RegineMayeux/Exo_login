<?php

// activation du système d'autoloading de Composer
require __DIR__.'/../vendor/autoload.php';

// instanciation du chargeur de templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');

// instanciation du moteur de template
$twig = new \Twig\Environment($loader, [
    // activation du mode debug
    //'debug' => true,
    // activation du mode de variables strictes
    //'strict_variables' => true,
    // activation du cache
    'cache' => __DIR__.'/../var/cache',
]);

// chargement de l'extension Twig_Extension_Debug
//$twig->addExtension(new \Twig\Extension\DebugExtension());

$formData = [
    'login'  => '',
    'password' => '',
];

if ($_POST) {
    $errors = [];
    $messages = [];

    // remplacement des valeur par défaut par celles de l'utilisateur


    if (isset($_POST['login'])) {
        $formData['login'] = $_POST['login'];
    }

    if (isset($_POST['password'])) {
        $formData['password'] = $_POST['password'];
    }

    // validation des données envoyées par l'utiilisateur


    if (!isset($_POST['login']) || empty($_POST['login'])) {
        $errors['login'] = true;
        $messages['login'] = "Identifiant ou mot de passe incorrect";
    } elseif (strlen($_POST['login']) < 4) {
        $errors['login'] = true;
        $messages['login'] = "L'identifiant' doit faire 4 caractères minimum";
    } elseif (strlen($_POST['login']) > 100) {
        $errors['login'] = true;
        $messages['login'] = "L'identifiant' doit faire 200 caractères maximum";
    }

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        $errors['password'] = true;
        $messages['password'] = "Identifiant ou mot de passe incorrect";
    } elseif (strlen($_POST['password']) < 4) {
        $errors['password'] = true;
        $messages['password'] = "Le mot de passe doit faire 4 caractères minimum";
    } elseif (strlen($_POST['password']) > 100) {
        $errors['password'] = true;
        $messages['password'] = "Le mot de passe doit faire 1000 caractères maximum";
    } elseif (!password_verify($_POST['password'], $user['password_hash'])) {
        echo 'mauvais mot passe';
    }

    if (!$errors) {
        dump('ok');
    }
}


// affichage du rendu d'un template
echo $twig->render('login.html.twig', [
    // transmission de données au template
    'errors' => $errors,
    'messages' => $messages,
    'formData' => $formData,
]);