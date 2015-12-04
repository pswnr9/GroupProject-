<?php
//Sha512 is being used for all hashing of passwords
class Account extends CI_model {
    //initiate the database
    public function __construct() {
        $config['hostname'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = 'root';
        $config['database'] = 'TeamWt';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';

        /*$config['hostname'] = getenv('OPENSHIFT_MYSQL_DB_HOST');
        $config['username'] = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        $config['password'] = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
        $config['database'] = getenv('OPENSHIFT_APP_NAME');
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        $config['port'] = getenv('OPENSHIFT_MYSQL_DB_PORT');*/


        $this->load->database($config);
    }

    //Returns true if authentication is successful, returns false if not
    public function authentication($data){

        $query = $this->db->get_where($data["user_type"] . '_user_info', array('pawprint' => $data["pawprint"]));
        if(count($query->result()) == 0) {
            return false;
        }

        //Querying the database
        $this->db->select('salt, password');
        $this->db->where('pawprint', $data["pawprint"]);
        //switch case changes the table the data is retrieved from based on user type
        switch ($data["user_type"]){
            case "emp":
                $query = $this->db->get('emp_user_info');
                break;
            case "admin":
                $query = $this->db->get('admin_user_info');
                break;
            case "tech":
                $query = $this->db->get('tech_user_info');
                break;
            default:
                return false;
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

        $query = $this->db->get_where('emp_user_info', array('pawprint' => $userInfo["pawprint"]));

        if(count($query->result()) != 0) {
            return false;
        }

        mt_srand();
        $userInfo['salt'] = mt_rand();
        $userInfo['password'] = hash('sha512', $userInfo['password'] . $userInfo['salt'], false);
        if($this->db->insert('emp_user_info', $userInfo)) {
            return true;
        }

    }

    public function registerAdminAccount($userInfo){
        foreach ($userInfo as $key => $value) {
            $userInfo[$key] = htmlspecialchars($value);
        }


        $query = $this->db->get_where('admin_user_info', array('pawprint' => $userInfo["pawprint"]));

        if(count($query->result()) != 0) {
            return false;
        }


        mt_srand();
        $userInfo['salt'] = mt_rand();
        $userInfo['password'] = hash('sha512', "0000" . $userInfo['salt'], false);
        $this->db->insert('admin_user_info', $userInfo);
    }

}
