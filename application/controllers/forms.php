<?php
class Forms extends CI_Controller {

    //Basic functions
    public function firstform($page = '') {

        if ( !file_exists(APPPATH.'/views/forms/firstform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper("session");
        $this->load->helper("checking");
        if(!session()) {
            //redirect("index.php/users/login");
        }

        switch($page) {
            case 'firstform':
                //query from database and pull all the information about the user and then auto populate
                if($_POST) {
                    if(pass_checking($_POST)) {
                        // redirect();
                    } else {

                    }
                }
                # code...
                break;
            default:
                break;
        }


        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("forms/firstform", $data);
    }

    public function secondform($page = '') {

        if ( ! file_exists(APPPATH.'/views/forms/secondform.php') || $page != '') {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper("session");
        $this->load->helper("checking");
        if(!session()) {
            //redirect("index.php/users/login");
        }




        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view("forms/secondform", $data);

    }

}
?>
