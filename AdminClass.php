<?php
require_once 'AbstractUser.php';

class Admin extends User{
    
    public function __construct($firstName, $lastName, $phoneNumber, $email){
        parent::__construct($firstName, $lastName, $phoneNumber, $email);
        $this-> amIadmin = true;
    }
    
    public function __toString(){
        return sprintf("%s Admin?: %s<br>", parent::__toString(), $this-> amIadmin);
    }
}
?>