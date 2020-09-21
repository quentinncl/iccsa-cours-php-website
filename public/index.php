<?php
    require '../vendor/autoload.php';

    
    $uri = $_SERVER['REQUEST_URI'];
    
    $router = new AltoRouter();
    
    // Accès aux différentes vue
    $router->map('GET', '/', 'home');
    $router->map('GET', '/contact', 'contact');
    $router->map('GET', '/competences', 'competences');

    // traitement de formulaire
    $router->map('POST', '/sendMail', '../utils/traitement-form');
    
    $match = $router->match();
    if(is_array($match)) {
        if(is_callable($match['target'])){
            call_user_func_array($match['target'], $match['params']);
        } else {
            ob_start();
            require "../src/views/{$match['target']}.php" ;
            $pageContent = ob_get_clean();

        }
        require "../src/views/commons/layout.php";
    } else {
        echo 404;
    }
