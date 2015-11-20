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


//
//    public function f($page ="1") {
//        if ( !file_exists(APPPATH.'/views/forms/form_' . $page . '.php') ) {
//            // Whoops, we don't have a page for that!
//            show_404();
//        }
//        /*
//        if(!session()) {
//            redirect("index.php/users/login");
//        }*/
//
//        $data['title'] = "Form - ". $page;
//
//        if($_POST) {
//            // $data = $_POST;
//            // $this->load->view("forms/test", $data);
//            // return;
//            $data = preprocess($page, $_POST);
//
//            $check_result = check_form($page, $data);
//            $data = escapedata($data);
//
//            if($check_result["passed"]) {
//
//                switch ($page) {
//
//                    case '1':
//                        $this->form->insertPrepareForm($data);
//                        isset($data["access_type"]) ? redirect("index.php/forms/f/".$data["access_type"]) : redirect("index.php/forms/f/1");
//                        break;
//
//                    case '2':
//                        $this->form->insertStudentRecordsAccess($data);
//                        break;
//
//                    case '3':
//                        $this->form->insertAdmissionsAccess($data);
//                        break;
//
//                    case '4':
//                        $this->form->insertStudentFinancialsAccess($data);
//                        break;
//
//                    case '5':
//                        $this->form->insertStudentFinancialAidAccess($data);
//                        break;
//
//                    case '6':
//                        $this->form->insertReservedAccess($data);
//                        break;
//
//                    default:
//                        # code...
//                        break;
//                }
//
//                redirect("index.php/users/home");
//
//            } else {
//                $data = $_POST;
//                $data['format_error'] = $check_result['error'];
//                $this->load->view("templates/header", $data);
//                $this->load->view("forms/form_" . $page, $data);
//                $this->load->view("templates/footer", $data);
//                return;
//            }
//        } else {
//            if($page == '1') {
//                $data = $this->form->getAutoFill($_SESSION['pawprint']);
//            }
//            $data['title'] = ucfirst($page); // Capitalize the first letter
//            $this->load->view("templates/header", $data);
//            $this->load->view("forms/form_" . $page, $data);
//            $this->load->view("templates/footer", $data);
//        }
//    }
//    
    //start of function g
    public function g($page ="all") {
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
        //    $data = preprocess($page, $_POST);

            //$check_result = check_form($page, $data);
      //      $data = escapedata($data);
            
$data = $_POST;
            
            if(1) {


             //insert prepare_form, bi tian      
//                         $eu_info = array('ferpa_score' => '');
//                            foreach ($data as $key => $value) {
//                                if(in_array($key, array_keys($eu_info))) {
//                                    $eu_info[$key] = $value;
//                                    if($key != 'pawprint') {
//                                        unset($data[$key]);
//                                    }
//
//                                }
//                            } 

                        $this->form->insertPrepareForm($data);
                
                        isset($data["access_type"]) ? redirect("index.php/forms/f/".$data["access_type"]) : redirect("index.php/forms/f/1");

                        
                
                //GET FORM_ID
                
                
                     if($_POST['access2'] != ""){  // case '2':
                          $eu_info = array('basic_inquiry' => '','advanced_inquiry' => '','3Cs' => '','advisor_update' => '','department_SOC_update' => '','service_indicators' => '','student_group_view' => '','view_study_list' => '','registrar_enrollment' => '','advisor_student_center' => '','class_permission' => '','class_permission_view' => '','class_roster' => '','block_enrollment' => '','report_manager' => '','self_service_advisor' => '','fiscal_officer' => '','academic_advising_profile' => '');
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = $value;

                                }
                            } 
                            $this->form->insertStudentRecordsAccess($data);
                         }

                     if($_POST['access3'] != ""){
                         $eu_info = array('act' => '','lelts' => '','ged' => '','sat' => '','lsat' => '','millers' => '','gre' => '','mcat' => '','rpax' => '','gmat' => '','ap' => '','pla-mu' => '','tofel' => '','clep' => '','base' => '');
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = $value;

                                }
                            } 
                            //$eu_info['form_id'] = $result;
                             $this->form->insertAdmissionsAccess($eu_info);
                     }
                
                     if($_POST['access4'] != ""){
                            
                            $eu_info = array('general_inquiry'=>'','cash_group_post'=>'');
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {

                                    $eu_info[$key] = $value;

                                }
                            } 
                               //$eu_info['form_id'] = $result;

                            $this->form->insertStudentFinancialsAccess($eu_info);
                     }
                
                     if($_POST['access5'] != ""){
                         $eu_info = array('fa_cash'=>'','fa_non_financial_aid_stuff'=>'');
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {

                                    $eu_info[$key] = $value;

                                }
                            } 
                         //$eu_info['form_id'] = $result;
                         $this->form->insertStudentFinancialAidAccess($data);
                     }

                     if($_POST['access6'] != ""){
                         $eu_info = array('immunization_view ' => '','transfer_credit_admission ' => '','relationships ' => '','student_groups ' => '','accommodate ' => '','support_staff ' => '','advance_standing_report ' => '');
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = $value;

                                }
                            } 
                         //$eu_info['form_id'] = $result;
                        $this->form->insertReservedAccess($eu_info);
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
        } 
            
                $data = $this->form->getAutoFill($_SESSION['pawprint']);
            
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view("templates/header", $data);
            $this->load->view("forms/form_" . $page, $data);
            $this->load->view("templates/footer", $data);
        
    }
    
    


}
?>
