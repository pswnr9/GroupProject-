<?php
class Users extends CI_Controller {

        //Basic functions
        public function login($page="") {
            if ( ! file_exists(APPPATH.'/views/users/login.php')) {
                // Whoops, we don't have a page for that!
                show_404();
            }
            $this->load->helper('url');
            $this->load->helper('session');
            $data['title'] = "login"; // Capitalize the first letter

            if($_POST || session()) {
                redirect("index.php/users/home");
            } else {

            }


            $this->load->view('templates/header', $data);
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer', $data);
        }

        public function register($page="") {
            if ( ! file_exists(APPPATH.'/views/users/register.php')) {
                // Whoops, we don't have a page for that!
                show_404();
            }

            $this->load->helper('url');
            $this->load->helper('session');
            if($_POST || session()) {
                redirect("index.php/users/home");
            } else {

            }

            $data['title'] = "register"; // Capitalize the first letter


            $this->load->view('templates/header', $data);
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer', $data);
        }

        public function home($page="") {
            if ( ! file_exists(APPPATH.'/views/users/home.php')) {
                // Whoops, we don't have a page for that!
                show_404();
            }

            $this->load->helper('url');
            $this->load->helper('session');

            if(!session()) {
                redirect("index.php/users/login");
            }

            $data['title'] = "home"; // Capitalize the first letter

            $this->load->helper('url');
            $this->load->view('templates/header', $data);
            $this->load->view('users/home', $data);
            $this->load->view('templates/footer', $data);
        }


}
?>
