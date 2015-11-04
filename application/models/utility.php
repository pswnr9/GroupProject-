<?php
//Utility functions for the site
class Utility extends CI_Model{
    
    //"Cleans" the items in the dirty array by running every element through htmlspecialchars
    //Useful for when 3 or more things need to be run through htmlspecialchars
    public function cleaner($dirty){
        $numItems = count($dirty);
        for($i = 0; i<$numItems; $i++){
             $dirty[i] = htmlspecialchars($dirty[i]);
        }
        return $dirty;
    }
}