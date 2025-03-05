<?php

require_once __DIR__ . "/../facades/ServiceFacade.php";

function render()
{
    $facade = new ServiceFacade();
    $userInfo = $facade->getUserInfo();
    $welcomeMessage = $facade->getWelcomeMessage();
    $allUsers = $facade->getAllUsers();

    $content = "<h1>Bienvenido a la Página de Inicio</h1>
                <p>{$welcomeMessage}</p>
                <p>Usuario: {$userInfo['name']} ({$userInfo['role']})</p>
                <p>¡Disfruta de la música de fondo!</p>
                <h2>Mecanismo de la Fachada</h2>
                <p>La Fachada está obteniendo datos del servicio de usuarios.</p>
                <h3>Lista de Usuarios</h3>
                <pre>" . json_encode($allUsers, JSON_PRETTY_PRINT) . "</pre>";
    include_once "views/home.php";
}
