<?php 
namespace App\Models;
use CodeIgniter\Model;

class FormModel extends Model
{
    
    protected $table = 'uzivatele';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jmeno', 'prijmeni', 'vek', 'pohlavi'];
    
    }