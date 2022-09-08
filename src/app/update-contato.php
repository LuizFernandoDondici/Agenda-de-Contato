<?php

require __DIR__ . '../../config/connect.php';

function updateContato()
{

    // Valida Input.

    $id = $_POST['id'];
    $name = $_POST['name'];
    $tel = str_replace(array("(", ")", "-", " "), "", $_POST['tel']);
    $cel = str_replace(array("(", ")", "-", " "), "", $_POST['cel']);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $cep = str_replace("-", "", $_POST['cep']);
    $street = $_POST['street'];
    $num = $_POST['num'];
    $comp = $_POST['comp'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $uf = $_POST['uf'];
         

    $msgError = '';

    if (empty($name)) {
        $msgError = 'Nome não preenchido.';
    }

    if (strlen($name) > 50) {
        $msgError = 'Erro ao salvar o Nome.';
    }

    if (!empty($tel)) {
        if (strlen($tel) != 11) {
            $msgError = 'Telefone invalido.';
        }
    }
    
    if (!empty($cel)) {
        if (strlen($cel) != 11) {
            $msgError = 'Celular invalido.';
        }
    }

    if (!empty($email)) {
        if (strlen($email) > 50 || !preg_match('/^[a-z0-9._-]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', $email)) {
            $msgError = 'E-mail invalido.';
        }
    }
   
    if (!empty($birthday)) {
        if (strlen($birthday) != 10) {
            $msgError = 'Data invalida.';
        }
    }
    
    if (!empty($cep)) {
        if (strlen($cep) != 8) {
            $msgError = 'Cep invalido.';
        }
    }

    if (!empty($street)) {
        if (strlen($street) > 25) {
            $msgError = 'Erro ao cadastrar a Rua.';
        }
    }

    if (!empty($num)){
        if (strlen($num) > 10) {
            $msgError = 'Erro ao cadastrar o Numero.';
        }
    }

    if (!empty($comp)) {
        if (strlen($comp) > 10) {
            $msgError = 'Erro ao cadastrar o Complemento.';
        }
    }

    if (!empty($district)) {
        if (strlen($district) > 25) {
            $msgError = 'Erro ao cadastrar o Bairro.';
        }
    }
    
    if (!empty($city)) {
        if (strlen($city) > 25) {
            $msgError = 'Erro ao cadastrar a Cidade.';
        }
    }

    if (!empty($uf)) {
        if (!preg_match('/^(AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)?$/i', $uf)) {
            $msgError = 'UF invalido.';
        }
    }

    if ($msgError != '') {

        ob_clean();
        echo json_encode(
            array(
                'success' => 0,
                'msg' => $msgError,
            )
        );

        exit;
    }


    // Atualiza Contato.
    
    try {

        $db = createConnection();

        $stmtContact = $db->prepare(
            'UPDATE contact SET
            name = ?, tel = ?, cel = ?, email = ?, birthday = ?, cep = ?, 
            street = ?, num = ?, comp = ?, district = ?, city = ?, uf = ?
            WHERE id = ?;'
        );

        $stmtContact->bindParam(1, $name);
        $stmtContact->bindParam(2, $tel);
        $stmtContact->bindParam(3, $cel);
        $stmtContact->bindParam(4, $email);
        $stmtContact->bindParam(5, $birthday);   
        $stmtContact->bindParam(6, $cep);
        $stmtContact->bindParam(7, $street);
        $stmtContact->bindParam(8, $num);
        $stmtContact->bindParam(9, $comp);
        $stmtContact->bindParam(10, $district);
        $stmtContact->bindParam(11, $city);
        $stmtContact->bindParam(12, $uf); 
        $stmtContact->bindParam(13, $id); 

        $stmtContact->execute(); 

        ob_clean();
        echo json_encode(
            array(
                'success' => 1,
            )
        );

    } catch (\Throwable $th) {
        
        header('Location: /erro');
    }
}
