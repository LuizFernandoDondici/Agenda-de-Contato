<?php

function createConnection()
{
    try {
        
        // Gera conexão com o database e cria tabela 'contact'.

        $pdo = new PDO ('sqlite:'. __DIR__ .'../../database/contact-book.sqlite');

        $queryContact = 
            'CREATE TABLE IF NOT EXISTS contact(
                id INTEGER PRIMARY KEY,
                name TEXT,
                tel TEXT,
                cel TEXT,
                email TEXT,
                birthday TEXT,
                cep TEXT,
                street TEXT,
                num TEXT,
                comp TEXT,
                district TEXT,
                city TEXT,
                uf TEXT
            );';

        $pdo->exec($queryContact);

        return $pdo;

    } catch (\Throwable $th) {
        
        header('Location: /erro');
    }
}
