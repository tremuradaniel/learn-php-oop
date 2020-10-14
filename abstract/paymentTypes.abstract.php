<?php

    abstract class Visa {
        public function visaPayment()
        {
            return "Perform a payment";
        }
        // if any class extends this abstract class, 
        // they have to include a call to this method
        abstract public function getPayment();
    }