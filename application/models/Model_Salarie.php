<?php
class Model_Salarie extends CI_Model 
{
    function GetAllSecteurs()
    {
      $sql = $this->db->query("Select * from secteur");   
        return $sql->result(); 
    }
    function GetAllRayons()
    {
        $sql = $this->db->query("Select * from rayon");   
        return $sql->result(); 
    }
    function GetAllSalarie($codeR)
    {
        $sql = $this->db->query("SELECT prenomE FROM employe,travailler  WHERE employe.numE = travailler.codeE AND codeR =".$codeR);   
        return $sql->result();
        
    }
}
