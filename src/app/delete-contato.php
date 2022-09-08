<?php

require __DIR__ . '../../config/connect.php';

function deleteContato()
{

    // Deleta contato.

    $id = $_GET['id'];
    
    try {
        
        $db = createConnection();

        $stmt = $db->prepare(
            'DELETE FROM contact WHERE id = ?;'
        );

        $stmt->bindParam(1, $id);

        $stmt->execute();

        header('Location: /lista-contato');

    } catch (\Throwable $th) {
        
        header('Location: /erro');
    }
}
