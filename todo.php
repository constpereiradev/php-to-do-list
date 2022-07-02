<?php


use PDO;

class Tarefa{

    public string $tarefa;

    public string $table;

    //metodo construct
    public function __construct($tarefa)
    {
        $this->tarefa = $tarefa;
    }



    //metodo insert
    public function insert (){

        $sql = ("INSERT INTO tarefa VALUES ('?')");

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

    }
        


        

    
}





?>