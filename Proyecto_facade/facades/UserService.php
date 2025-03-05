<?php

class UserService
{
    // Datos de usuarios simulados (podrían venir de una base de datos o API)
    private $users = [
        [
            'id' => 1,
            'name' => 'Juan Pérez',
            'email' => 'juan.perez@example.com',
            'role' => 'Administrador'
        ],
        [
            'id' => 2,
            'name' => 'María Gómez',
            'email' => 'maria.gomez@example.com',
            'role' => 'Usuario'
        ],
        [
            'id' => 3,
            'name' => 'Carlos López',
            'email' => 'carlos.lopez@example.com',
            'role' => 'Invitado'
        ]
    ];

    // Obtener todos los usuarios
    public function getAllUsers()
    {
        return $this->users;
    }

    // Obtener un usuario por ID
    public function getUserById($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    // Obtener un usuario aleatorio
    public function getRandomUser()
    {
        return $this->users[array_rand($this->users)];
    }
}
