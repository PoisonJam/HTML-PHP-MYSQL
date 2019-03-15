<?php
require_once 'AbstractUser.php';

class Benefactor extends User{
    private $employer;
    private $address;
    private $title;
    private $fax;
    
    public function __construct($firstName, $lastName, $phoneNumber, $email, $employer, $address, $title, $fax){
        parent::__construct($firstName, $lastName, $phoneNumber, $email);
        $this-> employer = $employer;
        $this-> address = $address;
        $this-> title = $title;
        $this-> fax = $fax;
        $this-> amIadmin = false;
    }
    
    public function __toString(){
        return sprintf("
            %s 
            Employer: %s <br>
            Address: %s <br>
            Title: %s <br>
            Fax: %s <br>
            Admin?: %s <br>",
            parent::__toString(),
            $this-> employer,
            $this-> address,
            $this-> title,
            $this-> fax,
            $this-> amIadmin);
    }
    
    public function getEmployer(){
        return $this-> employer;
    }
    
    public function getAddress(){
        return $this-> address;
    }
    
    public function getTitle(){
        return $this-> title;
    }
    
    public function getFax(){
        return $this-> fax;
    }
    
    public function setEmployer($EMP){
        $this-> employer = $EMP;
    }
    
    public function setAddress($ADD){
        $this-> address = $ADD;
    }
    
    public function setTitle($TIT){
        $this-> title = $TIT;
    }
    
    public function setFax($FAX){
        $this-> fax = $FAX;
    }
}
?>