<?php

    class TestDb extends Dbh {

        public function getUsers () {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while ($row = $stmt->fetch()) {
                echo $row['firstname'] . "<br>";
            }
        }

        public function getUsersStmt($firstname)
        {
            $sql = "SELECT * FROM users WHERE firstname = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname]);
            $names = $stmt->fetchAll();
            foreach ($names as $name) {
                echo $name['firstname'] . "<br>";
            }
        }
    }