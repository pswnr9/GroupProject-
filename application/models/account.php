<?php
//Sha512 is being used for all hashing of passwords
class Account extends CI_model {
    //initiate the database
    public function __construct() {
            $this->load->database();
    }

    //Returns true if authentication is successful, returns false if not
    public function authentication($data){
        //Querying the database
        $this->db->select('salt, password');
        $this->db->where('pawprint', $data["pawprint"]);
        //switch case changes the table the data is retrieved from based on user type
        switch ($data["user_type"]){
            case "employee":
                $query = $this->db->get('emp_user_info');
                break;
            case "admin":
                $query = $this->db->get('admin_user_info');
                break;
            case "tech":
                $query = $this->db->get('tech_user_info');
                break;
            default:
                break;
        }
        $row = $query->first_row('array');
        $password_hash = $row['password'];
        $salt = $row['salt'];
        if($password_hash == hash('sha512', $data["password"] . $salt, false)){
            return true;
        } else{
            return false;
        }
    }

    public function registerEmployeeAccount($userInfo){
        foreach ($userInfo as $key => $value) {
            $userInfo[$key] = htmlspecialchars($value);
        }
        mt_srand();
        $userInfo['salt'] = mt_rand();
        $userInfo['password'] = hash('sha512', $userInfo['password'] . $userInfo['salt'], false);
        $this->db->insert('emp_user_info', $userInfo);
    }

        public function registerAdminAccount($userInfo){
        foreach ($userInfo as $key => $value) {
            $userInfo[$key] = htmlspecialchars($value);
        }
        mt_srand();
        $userInfo['salt'] = mt_rand();
        $userInfo['password'] = hash('sha512', $userInfo['password'] . $userInfo['salt'], false);
        $this->db->insert('admin_user_info', $userInfo);
    }

}
