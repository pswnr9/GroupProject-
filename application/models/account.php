<?php
//Sha512 is being used for all hashing of passwords
class Account extends CI_model {

    //Returns true if authentication is successful, returns false if not
    public function authentication($username, $password){
        //$password_hash = pull salt and password hash from database
        
        if($password_hash == hash('sha512', $password . $salt, false)){
            return true;
        } else{
            return false;
        }
    }
    
    //More parameters will need to be added
    public function registerAccount($username, $password){
        $cleanUsername = htmlspecialchars($username);
        $cleanPass = htmlspecialchars($password);

        //Store username, password, salt, etc in DB
    }
    
    //In the same boat as registerAccount
    public function createAdministration($username, $password){
        $cleanUsername = htmlspecialchars($username);
        $cleanPass = htmlspecialchars($password);
        $salt = mt_rand();
        $password_hash = hash('sha512', $cleanPass . $salt, false);
        
        //Store username, password, salt, etc in DB
    }
    
    //returns the user type for determining access level
    public function getUserType($username){
        $cleanUsername = htmlspecialchars($username);
        //Get $usertype from the database using the given username
        return $userType;
    }
 
}
