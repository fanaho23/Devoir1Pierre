<?php
class Model_Salarie extends CI_Model 
{
    function GetAllSecteurs()
    {
      $sql = $this->db->query("Select * from secteur");   
        return $sql->result(); 
    }
    function GetAllRayonsBySecteur($codeSecteur)
    {
        $sql = $this->db->query("SELECT nomR, numR FROM rayon WHERE numSecteur =".$codeSecteur);   
        return $sql->result(); 
    }
   function GetAllSalarie($codeRayon)
    {
        $sql = $this->db->query("SELECT prenomE, date, temps FROM employe,travailler  WHERE employe.numE = travailler.codeE AND codeR =".$codeRayon);   
       return $sql->result();
      
   }
}
