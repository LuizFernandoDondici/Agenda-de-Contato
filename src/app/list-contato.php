<?php

require __DIR__ . '../../config/connect.php';

function listContato()
{

    // Lista Contatos.
    
    try {
        
        $db = createConnection();

        $stmt = $db->prepare(
            'SELECT id, name, tel, cel, email 
            FROM contact ORDER BY name;'
        );

        $stmt->execute();

        $listContato = $stmt->fetchAll();

        require __DIR__ . "../../view/list-contato.php";

    } catch (\Throwable $th) {
        
        header('Location: /erro');
    }
}
