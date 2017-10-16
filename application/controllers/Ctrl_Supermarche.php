<?php

class Ctrl_Supermarche extends CI_Controller
{
    public function index()
    {
       
            
           
           $this->load->model("Model_Salarie");
           $data['lesSecteurs'] = $this->Model_Salarie->GetAllSecteurs();
            
           $this->load->view("v_Salarie",$data);
            
    }
    public function GetRayonsBySecteur()
        {
            
        $codeSecteur = $_GET['codeSecteur'];
        //echo $codeSecteur;
            //Appel du Model
           $this->load->model("Model_Salarie");
//            
        $data2['lesRayons']= $this->Model_Salarie->GetAllRayonsBySecteur($codeSecteur);
          $this->load->view("v_Salarie",$data2);
            //$this->index();
        }
    public function GetEmployeByRayon()
            {
        $codeRayon = $_GET['codeRayon'];
        echo $codeRayon;
        $this->load->model("Model_Salarie");
        $data3['lesEmployes']= $this->Model_Salarie-> GetAllSalarie($codeRayon);
        $this->load->view("v_Salarie",$data3);
            }
}
