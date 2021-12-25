<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Babymodel extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function fetchtable()  
        {  
            $query = $this->db->get('baby');  
            return $query->result();  
        }  
}  
?>  