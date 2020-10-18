<?php

    class TestDb extends Dbh {
        public function getUsers () {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while ($row = $stmt->fetch()) {
                echo $row['firstname'] . "<br>";
            }
        }
    }