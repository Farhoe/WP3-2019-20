<?php 
class Debitor
{
    private $id;
    private $firstname 
    private $lastname
    private $amount
    private $description
    private $deadline

    public function __construct($id, $firstname, $lastname, $amount, $description, $deadline) {

    $this->id = $id;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->amount = $amount;
    $this->description = $description;
    $this->deadline = $deadline;

    }

    public function getID(){
        return $this->id;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getAmount(){
        return $this->amount;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getDeadline(){
        return $this->deadline;
    }
}

