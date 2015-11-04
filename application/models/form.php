<?php
class Form extends CI_Model{
    
    //Returns an associative array of the information that the initial form needs to autopopulate
    public function getAutoFill($username){
        $cleanUsername = htmlspecialchars($username);
        //$this->db->select('*')->from('user_info')->where('username', $cleanUsername);
    }
    
    //The rest of these functions can't be implemented until a database is in place
    public function insertStudentRecordsAccess($username){
        
    }
    
    public function insertAdmissionsAccess($username){
        
    }
    
    public function insertStudentFinancialsAccess($username){
        
    }
    
    public function insertStudentFinancialAidAccess($username){
        
    }
    
    public function insertReservedAccess($username){
        
    }
    
    public function getStudentRecordsAccess(){
        
    }
    
    public function getAdmissionsAccess(){
        
    }
    
    public function getStudentFinancialsAccess(){
        
    }
    
    public function getStudentFinancialAidAccess(){
        
    }
    
    public function getReservedAccess(){
        
    }
}