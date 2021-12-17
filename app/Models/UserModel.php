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

    public function insertUser($data) {
        return $this->db->table($this->table)->insert($data);
    }

    public function checkUser($id_user) {
        $builder = $this->db->table($this->table);
        $builder->where('username', $id_user)
                ->orWhere('email', $id_user)
                ->orWhere('phone_number', $id_user);
        return $builder->get()->getRowArray();
    }
}