<?php

namespace App\Controllers;
use App\Models\FormModel;

class Home extends BaseController
{
	public function index()
	{
		return view('contact_form');
	}
         
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'jmeno' => 'required|min_length[3]',
            'prijmeni' => 'required|min_length[3]',
            'vek' => 'required|numeric|max_length[3]',
            
            
        ]);

        $formModel = new FormModel();
 
        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'jmeno' => $this->request->getVar('jmeno'),
                'prijmeni' => $this->request->getVar('prijmeni'),
                'vek'  => $this->request->getVar('vek'),
                'pohlavi'  => $this->request->getVar('pohlavi'),
                
            ]);          
            $message = 'Úspěšně přidáno';
            echo "<script type='text/javascript'>alert('$message');</script>";
            return view('contact_form');


        }
    }

}
