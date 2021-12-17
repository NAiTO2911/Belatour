<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Code_model extends Model {
 
    protected $table = 'verif_code';
    
    public function insertCode($data) {
        return $this->db->table($this->table)->insert($data);
    }
    
    public function getCode($code) {
        return $this->db->table($this->table)->getWhere(['key_code' => $code])->getRowArray();  
    }
    
} 