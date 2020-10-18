<?php

    // model?
    class Users extends Dbh {
        protected function getUsers($firstname) {
            $sql = "SELECT * FROM users WHERE firstname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname]);
            $results = $stmt->fetchAll();
            // print_r($results);
            // echo '$firstname' . $results;
            return $results;
        }

        protected function setUser($firstname, $lastname, $dob) {
            $sql = "INSERT INTO users(firstname, lastname, dateOfBirth) VALUES (?, ?, ?)";
            echo $sql;
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dob]);
        }

    }