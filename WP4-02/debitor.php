<?php 
class Debitor 
{
    private $id;
    private $firstname 
    private $lastname
    private $amount
    private $description
    private $deadline

    public function __construct($id, $firstname, $lastname, $amount, $description, $deadline = 0) {

    $this->id = $id;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->amount = $amount;
    $this->description = $description;
    $this->deadline = $deadline;

    }
}

