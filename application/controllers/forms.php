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



    public function f($page ="1") {
        if ( !file_exists(APPPATH.'/views/forms/form_' . $page . '.php') ) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!session()) {
            redirect("index.php/users/login");
        }

        $data['title'] = "Form - ". $page;

        if($_POST) {
            // $data = $_POST;
            // $this->load->view("forms/test", $data);
            // return;
            $data = preprocess($page, $_POST);

            $check_result = check_form($page, $data);
            $data = escapedata($data);

            if($check_result["passed"]) {

                switch ($page) {

                    case '1':
                        $this->form->insertPrepareForm($data);
                        isset($data["access_type"]) ? redirect("index.php/forms/f/".$data["access_type"]) : redirect("index.php/forms/f/1");
                        break;

                    case '2':
                        $this->form->insertStudentRecordsAccess($data);
                        break;

                    case '3':
                        $this->form->insertAdmissionsAccess($data);
                        break;

                    case '4':
                        $this->form->insertStudentFinancialsAccess($data);
                        break;

                    case '5':
                        $this->form->insertStudentFinancialAidAccess($data);
                        break;

                    case '6':
                        $this->form->insertReservedAccess($data);
                        break;

                    default:
                        # code...
                        break;
                }

                redirect("index.php/users/home");

            } else {
                $data = $_POST;
                $data['format_error'] = $check_result['error'];
                $this->load->view("templates/header", $data);
                $this->load->view("forms/form_" . $page, $data);
                $this->load->view("templates/footer", $data);
                return;
            }
        } else {
            if($page == '1') {
                $data = $this->form->getAutoFill($_SESSION['pawprint']);
            }
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view("templates/header", $data);
            $this->load->view("forms/form_" . $page, $data);
            $this->load->view("templates/footer", $data);
        }
    }


}
?>
