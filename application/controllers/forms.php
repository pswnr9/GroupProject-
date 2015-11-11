<?php
class Forms extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model("form");

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper("session");
        $this->load->helper("checking");
    }
    //Basic functions
    public function firstform($page = '') {

        if ( !file_exists(APPPATH.'/views/forms/firstform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }


        if(!session()) {
            //redirect("index.php/users/login");
        }

        $data['title'] = "firstform";

        //query from database and pull all the information about the user and then auto populate
        if($_POST) {
            foreach ($_POST as $key => $value) {
                $data[$key] = htmlspecialchars($value);

                if(empty($data[$key])) {
                    $data = $_POST;
                    $data['format_error'] = true;
                    $this->load->view('templates/header', $data);
                    $this->load->view('forms/firstform', $data);
                    $this->load->view('templates/footer', $data);
                    return;
                }
            }

            if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $data["phone_num"])) {
                // $phone is invalid
                $data['format_error'] = true;
                $this->load->view('templates/header', $data);
                $this->load->view('forms/firstform', $data);
                $this->load->view('templates/footer', $data);
                return;
            }

            $this->form->insertStudentRecordsAccess($data);

            redirect("index.php/forms/"+$data["access_type"]);

        } else {
            $data = $this->form->getAutoFill($_SESSION['pawprint']);
            $this->load->view("templates/header", $data);
            $this->load->view("forms/firstform", $data);
            $this->load->view("templates/footer", $data);
        }

    }

    public function secondform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/secondform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }


        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("templates/header", $data);
        $this->load->view("forms/secondform", $data);
        $this->load->view("templates/footer", $data);

    }

    public function thirdform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/thirdform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("templates/header", $data);
        $this->load->view("forms/thirdform", $data);
        $this->load->view("templates/footer", $data);

    }

    public function fourthform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/fourthform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("templates/header", $data);
        $this->load->view("forms/fourthform", $data);
        $this->load->view("templates/footer", $data);

    }

    public function fifthform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/fifthform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("templates/header", $data);
        $this->load->view("forms/fifthform", $data);
        $this->load->view("templates/footer", $data);

    }

    public function sixthform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/sixthform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("templates/header", $data);
        $this->load->view("forms/sixthform", $data);
        $this->load->view("templates/footer", $data);

    }


}
?>
