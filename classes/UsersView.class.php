<?php
    require '../vendor/autoload.php';


    class UsersView extends Users {

        public function showUsers ($name) {
            $results = $this->getUsers($name);
            // print_r($results);
            foreach ($results as $key => $value) {
                echo "Name: " . $value['firstname'];
            }
            
        }
    }