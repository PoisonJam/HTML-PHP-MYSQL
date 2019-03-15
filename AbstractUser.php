<?php 
abstract class User{
    
    protected $firstName;
    protected $lastName;
    protected $userKey;
    protected $phoneNumber;
    protected $email;
    protected $amIadmin;
    
    public function __construct($firstName, $lastName, $phoneNumber, $email){
        $this-> firstName = $firstName;
        $this-> lastName = $lastName;
        $this-> phoneNumber = $phoneNumber;
        $this-> email = $email;
        $this-> userKey = substr(md5(microtime().rand()), 0, -22);
    }
    
    public function __toString(){
        return sprintf("
            First Name: %s<br> 
            Last Name: %s<br> 
            Phone Number: %s<br> 
            Email: %s<br>
            Primary Key: %s<br>", 
            $this->  firstName,
            $this->  lastName,
            $this->  phoneNumber,
            $this->  email,
            $this->  userKey);
    }
    
    public function getFirstName(){
        return $this-> firstName;
    }
    
    public function getLastName(){
        return $this-> lastName;
    }
    
    public function getPhoneNumber(){
        return $this-> phoneNumber;
    }
    
    public function getEmail(){
        return $this-> email;
    }
    
    public function getUserKey(){
        return $this-> userKey;
    }
    
    public function setFirstName($FN){
        $this-> firstName = $FN;
    }
    
    public function setLastName($LN){
        $this-> lastName = $LN;
    }
    
    public function setPhoneNumber($PN){
        $this-> phoneNumber = $PN;
    }
    
    public function setEmail($EM){
        $this-> email = $EM;
    }
}
?>