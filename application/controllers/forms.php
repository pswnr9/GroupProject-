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


    public function f($page) {
        if(!session()) {
            redirect("index.php/users/login");
        }

        $form_info = $this->form->getFormById($page);
        if(count($form_info) == 0) {
            show_404();
        }
        $data = array("form_info" => $form_info);

        $this->load->view("forms/test", $data);

    }

    public function approve($page) {
        $form_info = $this->form->getFormById($page);
        if(count($form_info) == 0) {
            show_404();
        }

        session_start();
        if(!isset($_SESSION)) {
            return;
        }

        $this->form->approveForm($page, true, $_SESSION["pawprint"]);
        redirect("index.php/users/home");
    }

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
            $data = preprocess($_POST);
            $check_result = check_forms($data);
             $data = escapedata($data);
             
      

            
            if($check_result["passed"]) {
                $form_id = $this->form->createFormInfo();

                $eu_info = array('username' => '','title' => '','organization' => '','pawprint' => '','empiid' => '','address' => '','phone_num' => '','request_status' => '','student_worker' => '','if_cur_staff' => '','ref_name' => '','ref_pos' => '','ref_pawprint' => '','ref_empiid' => '','ferpa_score' => '','academic_career' => '', 'access_type' => '');
                foreach ($data as $key => $value) {
                    if(in_array($key, array_keys($eu_info))) {
                        $eu_info[$key] = $value;
                    }
                }
                $eu_info['form_id'] = $form_id;

                $this->form->insertPrepareForm($eu_info);




                //GET FORM_ID


                     if(is_numeric($data['access_type2'])){  // case '2':
                          $eu_info = array('basic_inquiry' => '','advanced_inquiry' => '','3Cs' => '','advisor_update' => '','department_SOC_update' => '','service_indicators' => '','student_group_view' => '','view_study_list' => '','registrar_enrollment' => '','advisor_student_center' => '','class_permission' => '','class_permission_view' => '','class_roster' => '','block_enrollment' => '','report_manager' => '','self_service_advisor' => '','fiscal_officer' => '','academic_advising_profile' => '');
                            foreach ($eu_info as $key => $value) {
                                $eu_info[$key] = 0;
                            }
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = (int)$value;

                                }
                            }
                            $eu_info['form_id'] = $form_id;
                            $this->form->insertStudentRecordsAccess($eu_info);
                         }

                     if(is_numeric($data['access_type3'])){
                         $eu_info = array('act' => '','lelts' => '','ged' => '','sat' => '','lsat' => '','millers' => '','gre' => '','mcat' => '','rpax' => '','gmat' => '','ap' => '','pla-mu' => '','tofel' => '','clep' => '','base' => '');
                            foreach ($eu_info as $key => $value) {
                                $eu_info[$key] = 0;
                            }
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = $value;

                                }
                            }
                            $eu_info['form_id'] = $form_id;
                             $this->form->insertAdmissionsAccess($eu_info);
                     }

                     if(is_numeric($data['access_type4'])){

                            $eu_info = array('general_inquiry'=>0,'cash_group_post'=>0);

                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {

                                    $eu_info[$key] = $value;

                                }
                            }
                            $eu_info['form_id'] = $form_id;

                            $this->form->insertStudentFinancialsAccess($eu_info);
                     }

                     if(is_numeric($data['access_type5'])){
                         $eu_info = array('fa_cash'=>0,'fa_non_financial_aid_stuff'=>0);
                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {

                                    $eu_info[$key] = $value;

                                }
                            }
                         $eu_info['form_id'] = $form_id;
                         $this->form->insertStudentFinancialAidAccess($eu_info);
                     }

                     if(is_numeric($data['access_type6'])){
                         $eu_info = array('immunization_view' => '','transfer_credit_admission' => '','relationships' => '','student_groups' => '','accommodate' => '','support_staff' => '','advance_standing_report' => '');
                            foreach ($eu_info as $key => $value) {
                                $eu_info[$key] = 0;
                            }


                            foreach ($data as $key => $value) {
                                if(in_array($key, array_keys($eu_info))) {
                                    $eu_info[$key] = $value;

                                }
                            }
                            $eu_info['form_id'] = $form_id;

                        $this->form->insertReservedAccess($eu_info);
                     }


                redirect("index.php/users/home");

            } else {
            //      $test['data'] = $data;
            // $this->load->view("forms/test", $test);
            // return;
                $data = $_POST;
                $data['format_error'] = $check_result['error'];
                $this->load->view("templates/header", $data);
                $this->load->view("forms/form_" . $page, $data);
                $this->load->view("templates/footer", $data);
                return;
            }
            
            
        }

        
                $data = $this->form->getAutoFill($_SESSION['pawprint']);

        
                 $pawprint = $_SESSION['pawprint'];
        $ids = $this->form->getIdByPawprint($pawprint);
       // print_r(var_dump($ids));
        //$ids = array(0~)
        $result = array();
        $i = 0;
            
        foreach ($ids as $value){
            $result[$i] = $this->form->getFormById($value);
            $i++;
        }
        //$result[0]->array of five array
            $data["result"] = $result;
        
            $this->load->view("templates/header", $data);
            $this->load->view("forms/form_" . $page, $data);
            $this->load->view("templates/footer", $data);

    }
    
    public function view_submitted_forms(){
        if(!session()) {
            redirect("index.php/users/login");
        }
        $pawprint = $_SESSION['pawprint'];
        $ids = $this->form->getIdByPawprint($pawprint);
       // print_r(var_dump($ids));
        //$ids = array(0~)
        $result = array();
        $i = 0;
            
        foreach ($ids as $value){
            $result[$i] = $this->form->getFormById($value);
            $i++;
        }
        //$result[0]->array of five array
            
            $data = array("result" => $result);

        $this->load->view("forms/test_view_forms", $data);
        
        
    }
    
    
    public function view_denied_forms(){
        if(!session()) {
            redirect("index.php/users/login");
        }
        $pawprint = $_SESSION['pawprint'];
        $ids = $this->form->getIdByPawprint_denied($pawprint);
       // print_r(var_dump($ids));
        //$ids = array(0~)
        $result = array();
        $i = 0;
            
        foreach ($ids as $value){
            $result[$i] = $this->form->getFormById($value);
            $i++;
        }
        //$result[0]->array of five array
            
            $data = array("result" => $result);

        $this->load->view("forms/test_view_denied_forms", $data);
        
        
    }
    
    
    public function downloadPDF($formID) {
        //this data will be passed on to the view
        $form_info = $this->form->getFormById($formID);
        if(count($form_info) == 0) {
            show_404();
        }
        $data = array("form_info" => $form_info);
        
        
        if(isset($forms['2'])){
            $data['form_2'] = true;            
        }
        if(isset($forms['3'])){
            $data['form_3'] = true;            
        }
        if(isset($forms['4'])){
            $data['form_4'] = true;            
        }
        if(isset($forms['5'])){
            $data['form_5'] = true;            
        }
        if(isset($forms['6'])){
            $data['form_6'] = true;            
        }

        //load the view, pass the variable and do not show it but "save" the output into $html variable
        $html=$this->load->view('forms/pdf_output', $data, true); 

        //this the the PDF filename that user will get to download
        $pdfFilePath = "the_pdf_output.pdf";

        //load mPDF library
        $this->load->library('m_pdf');
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //Set title
        $pdf->SetTitle('View Submitted Form');
        //generate the PDF!
        $pdf->WriteHTML($html);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output();
    }

}
?>
