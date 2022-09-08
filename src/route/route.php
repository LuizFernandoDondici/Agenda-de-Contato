<?php

function setRoute($path)
{

    // Verifica a rota.

    switch ($path) {
            
        case null:
            ob_clean();
            require __DIR__ . '../../view/form-register.php';
            break; 

        case '/formulario-contato':
            require __DIR__ . '../../view/form-register.php';
            break; 
        
        case '/salvar-contato':
            require __DIR__ . '../../app/save-contato.php';
            saveContato();
            break; 

        case '/lista-contato':
            require __DIR__ . '../../app/list-contato.php';
            listContato();
            break;    
        
        case '/visualizar-contato':
            require __DIR__ . '../../app/select-contato.php';
            selectContato();
            break; 

        case '/editar-contato':
            require __DIR__ . '../../app/select-contato.php';
            selectContato();
            break;

        case '/atualizar-contato':
            require __DIR__ . '../../app/update-contato.php';
            updateContato();
            break;

        case '/deletar-contato':
            require __DIR__ . '../../app/delete-contato.php';
            deleteContato();
            break;

        case '/erro':
            require __DIR__ . '../../view/pag-error.php';
            break;

        default:
            require __DIR__ . '../../view/pag-error.php';
            break;
    }    
}
