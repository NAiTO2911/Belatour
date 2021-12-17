<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = 
            ['full_name',
            'username',
            'email', 
            'password', 
            'phone_number', 
            'img_profile'];
    protected $createdField   = 'created_at';

    public function getUser($id) {
        return $this->db->table($this->table)->getWhere(['id_user' => $id])->getRowArray();
    }

    public function insertUser($data) {
        return $this->db->table($this->table)->insert($data);
    }
}