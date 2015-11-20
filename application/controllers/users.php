<?php
class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("account");
        $this->load->helper('url');
        $this->load->helper('session');
        $this->load->helper('checking');
    }

    //Basic functions
    public function login($page="") {
        if ( ! file_exists(APPPATH.'/views/users/login.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data = array();
        if(session()) {
            redirect("index.php/users/home");
        }

        if($_POST) {
            $data = escapedata($_POST);

            $check_result = check_login($data);

            if(!$check_result["passed"]) {
                $data = $_POST;
                $data['format_error'] = $check_result["error"];
                $this->load->view('templates/header', $data);
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer', $data);
                return;
            }


            if($this->account->authentication($data)) {
                session_start();
                $_SESSION["pawprint"] = $data["pawprint"];
                $_SESSION["user_type"] = $data["user_type"];
                redirect("index.php/users/home");
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

         $data = array();

        if($_POST) {
            $data = escapedata($_POST);

            $check_result = check_register($data);

            if(!$check_result["passed"]) {
                $data = $_POST;
                $data['format_error'] = $check_result["error"];
                $this->load->view('templates/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer', $data);
                return;
            }


            unset($data["password_retype"]);
            if($this->account->registerEmployeeAccount($data)) {
                session_start();
                $_SESSION["pawprint"] = $data["pawprint"];
                $_SESSION["user_type"] = 'emp';
                redirect("index.php/users/home");
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

    public function logout($page="") {
        if(session()) {
            unset($_SESSION['pawprint']);
            unset($_SESSION['user_type']);
            session_destroy();
        }
        redirect("index.php/users/login");
    }

    public function home($page="") {
        if(!session()) {
            redirect("index.php/users/login");
        }

        if ( ! file_exists(APPPATH.'/views/users/'.$_SESSION['user_type'].'_home.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = "Home - " .$_SESSION['user_type'];


        $this->load->view('users/'.$_SESSION['user_type'].'_home', $data);
    }


}
?>
