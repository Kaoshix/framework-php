<?php



/**
 * ----------------------------------------------------
 * Bienvenue dans notre framework fait maison
 * 
 * L'index.php représente le "FrontController"
     * Ses rôles : 
     *              - Charger le fichier de configuration
     *              - Créer une nouvelle instance du noyau
     *              - Récupérer la réponse qui sera ensuite 
     *                envoyée au navigateur
     * ----------------------------------------------------
    */
    
    
    // Chargement du fichier de configuration
    require_once dirname(__DIR__) . "/config/bootstrap.php";
    
    // dd($_SERVER);

    // Création d'une nouvelle instance du noyau de l'application
    $kernel = new App\Kernel($container);


    /**
     * Le frontController demande au noyau de soummettre la requête
     * et de récupérer la réponse correspondante
     */
    $response = $kernel->handleRequest();


    // Envoi de la réponse au client
    $response->send();