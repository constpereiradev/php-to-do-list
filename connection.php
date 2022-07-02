<?php

//conexao com a base de dados todo
$dsn = "mysql:host=localhost, dbname=todo";

    try {
        $pdo = new PDO ($dsn, 'root', '1234');
    } catch (Exception $e) {
            
        error_log($e->getMessage());
        exit ('Algo deu errado. Contacte o admnistrador.');
    }



?>