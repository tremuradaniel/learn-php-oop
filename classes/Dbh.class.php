<?php
    class Dbh {

        protected function connect () {
            // data source name
            $dsn = 'mysql:host=' . $_ENV['HOST'] . ';dbname=' . $_ENV['DBNAME'];
            $pdo = new PDO($dsn, $_ENV['USER'], $_ENV['PASSWORD']);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }

