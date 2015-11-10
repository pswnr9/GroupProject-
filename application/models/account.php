<?php
//Sha512 is being used for all hashing of passwords
class Account extends CI_model {
    //initiate the database
    public function __construct() {
            $this->load->database();
    }

    //Returns true if authentication is successful, returns false if not
    public function authentication($data){
        //$password_hash = pull salt and password hash from database


        if($password_hash == hash('sha512', $data["password"] . $salt, false)){
            return true;
        } else{
            return false;
        }
    }

    //More parameters will need to be added
    public function registerAccount($userInfo){
        foreach ($userInfo as $key => $value) {
            $userInfo[$key] = htmlspecialchars($value);
        }
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
