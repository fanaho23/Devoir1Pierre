<?php
class Model_Salarie extends CI_Model 
{
    function GetAllSecteurs()
    {
      $sql = $this->db->query("Select * from secteur");   
        return $sql->result(); 
    }
}
