<?php

require __DIR__ . '../../config/connect.php';

function selectContato()
{

    // Seleciona Contato.
    
    $id = $_GET['id'];
    
    try {
        
        $db = createConnection();

        $stmt = $db->prepare(
            'SELECT * FROM contact WHERE id = ?;'
        );

        $stmt->bindParam(1, $id);

        $stmt->execute();

        $contato = $stmt->fetch();

        require __DIR__ . "../../view/form-edit.php";

    } catch (\Throwable $th) {
        
        header('Location: /erro');
    }
}
