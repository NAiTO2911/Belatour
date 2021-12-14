<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        $mData['banner'] = [];

        echo view('templates/header', $mData);
        echo view('register', $data);
        echo view('templates/footer');
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'userrname'     => 'required|min_length[3]|max_length[20]',
            'phone_number'  => 'required|min_length[10]|max_length[13]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'full_name'    => $this->request->getvar('name'),
                'username'     => $this->request->getVar('username'),
                'email'        => $this->request->getVar('email'),
                'phone_number' => $this->request->getVar('phone_number'),
                'password'     => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}