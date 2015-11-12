<?php
class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("account");

        $this->load->helper('url');
        $this->load->helper('session');
    }

    //Basic functions
    public function login($page="") {
        if ( ! file_exists(APPPATH.'/views/users/login.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }


        if(session()) {
            redirect("index.php/forms/firstform");
        }

        $data['title'] = "login";

        if($_POST) {
            foreach ($_POST as $key => $value) {
                $data[$key] = htmlspecialchars($value);

                if(empty($data[$key])) {
                    $data = $_POST;
                    $data['format_error'] = true;
                    $this->load->view('templates/header', $data);
                    $this->load->view('users/login', $data);
                    $this->load->view('templates/footer', $data);
                    return;
                }
            }

            //$data = array("pawprint"=>$_POST['pawprint'], "password"=>$_POST['password'], "user_type"=>$_POST['type']);
            if($this->account->authentication($data)) {
                session_start();
                $_SESSION["pawprint"] = $dataT["pawprint"];
                $_SESSION["user_type"] = $data["user_type"];
                redirect("index.php/forms/firstform");
            } else {
                $data['auth_error'] = true;
                $this->load->view('templates/header', $data);
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer', $data);
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer', $data);
        }

    }

    public function register($page="") {
        if ( ! file_exists(APPPATH.'/views/users/register.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(session()) {
            redirect("index.php/forms/firstform");
        }

        $data['title'] = "register";

        if($_POST) {
            foreach ($_POST as $key => $value) {
                $data[$key] = htmlspecialchars($value);

                if(empty($data[$key])) {
                    $data = $_POST;
                    $data['format_error'] = "empty";
                    $this->load->view('templates/header', $data);
                    $this->load->view('users/register', $data);
                    $this->load->view('templates/footer', $data);
                    return;
                }
            }

            if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $data["phone_num"]) != 1) {
                // $phone is invalid
                $data['format_error'] = "phone";
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
                return;
            }

            if($data["password"] != $data["password_retype"]) {
                $data['format_error'] = "pss";
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
                return;
            }


            if($this->account->registerEmployeeAccount($data)) {
                session_start();
                $_SESSION["pawprint"] = $data["pawprint"];
                $_SESSION["user_type"] = $data["user_type"];
                redirect("index.php/forms/firstform");
            } else {
                //indicate that somthing wrong in the database. Maybe it's full..
                $data['db_error'] = true;
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
            }

        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer', $data);
        }

    }

    public function home($page="") {
        if ( ! file_exists(APPPATH.'/views/users/home.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }


        if(!session()) {
            redirect("index.php/users/login");
        }

        $data['title'] = "home"; // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('users/home', $data);
        $this->load->view('templates/footer', $data);
    }


}
?>
