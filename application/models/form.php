<?php
class Form extends CI_Model{
    public function __construct() {
        $config['hostname'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = '';
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

    /* Returns an associative array of the information that the initial form needs to autopopulate
     * The array returns the autofill data from the emp_user_info table with the keys of the array
     * having the same name as in the database, for consistency
     */
    public function getAutoFill($pawprint){
        $cleanPawprint = htmlspecialchars($pawprint);
        $this->db->select('*')->from('emp_user_info')->where('pawprint', $cleanPawprint);
        $query = $this->db->get();
        $row = $query->first_row();

        $array = array(
            "username" => $row->username,
            "title" => $row->title,
            "organization" => $row->organization,
            "pawprint" => $row->pawprint,
            "empiid" => $row->empiid,
            "address" => $row->address,
            "phone_num" => $row->phone_num,
        );

        return $array;
    }

    /*
     * The following functions are for insertion of form data into the database.
     * The data is passed to the forms via an associative array
     */

    public function insertPrepareForm($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }


        $eu_info = array('pawprint'=> '', 'username' => '', 'empiid' => '', 'title' => '', 'organization' => '', 'address' => '', 'phone_num' => '');
        foreach ($formInfo as $key => $value) {
            if(in_array($key, array_keys($eu_info))) {
                $eu_info[$key] = $value;
                unset($formInfo[$key]);
            }
        }

        $pawprint = $eu_info['pawprint'];
        unset($eu_info['pawprint']);



        $this->db->where('pawprint', $pawprint);
        $this->db->update('emp_user_info', $eu_info);

        //select form by pawprint, not exists, insert, else updata
       // $this->db->select('*')->from('prepare_form')->where('pawprint', $pawprint);
        //$query = $this->db->get();
        // if ( $query->num_rows() > 0 ) {
        //     $this->db->where('pawprint', $pawprint);
        //     $this->db->update('prepare_form', $formInfo);
        // } else {
        $this->db->insert('prepare_form', $formInfo);
        // }


    }

    public function createFormInfo() {
        date_default_timezone_set('America/Los_Angeles');
        $form_info = array();
        $form_info['pawprint'] = $_SESSION['pawprint'];
        $form_info['app_id'] = 0;
        $form_info['create_date'] = date('Y-m-d H:i:s');
        $this->db->insert('form_info', $form_info);
        return $this->db->insert_id();;
    }

    public function updateUserInfo($user_info) {
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $pawprint = $user_info['pawprint'];
        unset($user_info['pawprint']);
        $this->db->where('pawprint', $pawprint);
        $this->db->update('emp_user_info', $user_info);
    }



    public function insertStudentRecordsAccess($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $this->db->insert('student_record_access', $formInfo);
    }

    public function insertAdmissionsAccess($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $this->db->insert('admission_access', $formInfo);
    }

    public function insertStudentFinancialsAccess($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $this->db->insert('financial_access', $formInfo);
    }

    public function insertStudentFinancialAidAccess($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $this->db->insert('financial_aid_access', $formInfo);
    }

    public function insertReservedAccess($formInfo){
        foreach ($formInfo as $key => $value) {
            $formInfo[$key] = htmlspecialchars($value);
        }

        $this->db->insert('reserved_access', $formInfo);
    }

    /*
     * The following functions will get the information from the forms from the DB
     * and return them as an array
     */

    public function getStudentRecordsAccess($form_id){
        $clean_form_id = htmlspecialchars($form_id);
        $query = $this->db->select('*')->from('student_record_access')->where('form_id', $clean_form_id);
        $row = $query->first_row();

        $array = array(
            "basic_inquiry" => $row['basic_inquiry'],
            "advanced_inquiry" => $row['advanced_inquiry'],
            "3Cs" => $row['3Cs'],
            "advisor_update" => $row['advisor_update'],
            "department_SOC_update" => $row['department_SOC_update'],
            "service_indicators" => $row['service_indicators'],
            "student_group_view" => $row['student_group_view'],
            "view_study_list" => $row['view_study_list'],
            "registrar_enrollment" => $row['registrar_enrollment'],
            "advisor_student_center" => $row['advisor_student_center'],
            "class_permission" => $row['class_permission'],
            "class_permission_view" => $row['class_permission_view'],
            "class_roster" => $row['class_roster'],
            "block_enrollment" => $row['block_enrollment'],
            "report_manager" => $row['report_manager'],
            "self_service_advisor" => $row['self_service_advisor'],
            "fiscal_officer" => $row['fiscal_officer'],
            "academic_advising_profile" => $row['academic_advising_profile'],
        );

        return $array;
    }

    public function getAdmissionsAccess($form_id){
        $clean_form_id = htmlspecialchars($form_id);
        $query = $this->db->select('*')->from('admission_access')->where('form_id', $clean_form_id);
        $row = $query->first_row();

        $array = array(
            "act" => $row['act'],
            "lelts" => $row['lelts'],
            "ged" => $row['ged'],
            "sat" => $row['sat'],
            "lsat" => $row['lsat'],
            "millers" => $row['millers'],
            "gre" => $row['gre'],
            "mcat" => $row['mcat'],
            "rpax" => $row['rpax'],
            "gmat" => $row['gmat'],
            "ap" => $row['ap'],
            "pla-mu" => $row['pla-mu'],
            "tofel" => $row['tofel'],
            "clep" => $row['clep'],
            "base" => $row['base'],
        );

        return $array;
    }

    public function getStudentFinancialsAccess($form_id){
        $clean_form_id = htmlspecialchars($form_id);
        $query = $this->db->select('*')->from('financial_access')->where('form_id', $clean_form_id);
        $row = $query->first_row();

        $array = array(
            "general_inquiry" => $row['general_inquiry'],
            "cash_group_post" => $row['cash_group_post'],
        );

        return $array;
    }

    public function getStudentFinancialAidAccess($form_id){
        $clean_form_id = htmlspecialchars($form_id);
        $query = $this->db->select('*')->from('financial_aid_access')->where('form_id', $clean_form_id);
        $row = $query->first_row();

        $array = array(
            "fa_cash" => $row['fa_cash'],
            "fa_non_financial_aid_stuff" => $row['fa_non_financial_aid_stuff'],
        );

        return $array;
    }

    public function getReservedAccess($form_id){
        $clean_form_id = htmlspecialchars($form_id);
        $query = $this->db->select('*')->from('reserved_access')->where('form_id', $clean_form_id);
        $row = $query->first_row();

        $array = array(
            "immunization_view" => $row['immunization_view'],
            "transfer_credit_admission" => $row['transfer_credit_admission'],
            "relationships" => $row['relationships'],
            "student_groups" => $row['student_groups'],
            "accommodate" => $row['accommodate'],
            "support_staff" => $row['support_staff'],
            "advance_standing_report" => $row['advance_standing_report'],
        );

        return $array;
    }
}
