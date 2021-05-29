<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class FormController extends Controller
{

    public function create() {
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
                
            ]);          

             return view('create');
        }
    }
    
     

}