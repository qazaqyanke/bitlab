<?php 

try {

        $conn = new PDO('mysql:host=localhost;dbname=bitlab2', 'root', '');

        $sql= "SELECT id, login, name, surname FROM db";
        $result = $conn->query($sql);

        foreach ($result as $db) {
            echo $db['name'] . ' ' . $db['surname'] . '<br>';
        }

        }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }


?>