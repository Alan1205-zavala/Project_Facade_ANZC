<?php

require_once __DIR__ . "/../facades/UserService.php";

class ServiceFacade
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    // Obtener información de un usuario aleatorio
    public function getUserInfo()
    {
        $user = $this->userService->getRandomUser();
        return [
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role']
        ];
    }

    // Obtener todos los usuarios
    public function getAllUsers()
    {
        return $this->userService->getAllUsers();
    }

    // Obtener un usuario por ID
    public function getUserById($id)
    {
        return $this->userService->getUserById($id);
    }

    // Mensaje de bienvenida
    public function getWelcomeMessage()
    {
        return "Bienvenido a nuestro sitio web. ¡Esperamos que disfrutes tu visita!";
    }
}
//Mostrar el mecanismo de uso de la fachada