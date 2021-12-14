<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = 
            ['id_user',
            'full_name',
            'username',
            'email', 
            'password', 
            'phone_number', 
            'img_profile', 
            'created_at'];
}