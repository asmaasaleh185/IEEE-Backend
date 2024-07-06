<?php

class m0001_initial{
    public function up(){
        $db = \corepackage\phpmvc\Application::$app->db;
        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(225) NOT NULL,
            firstname VARCHAR(225) NOT NULL,
            lastname VARCHAR(225) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }
    
    public function down(){
        $db = \corepackage\phpmvc\Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}