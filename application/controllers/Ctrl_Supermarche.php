<?php

class Ctrl_Supermarche extends CI_Controller
{
    public function index()
    {
       
            
           
           $this->load->model("Model_Salarie");
           $data['lesSecteurs'] = $this->Model_Salarie->GetAllSecteurs();
            $this->load->view("v_Salarie",$data);
            
    }
}
