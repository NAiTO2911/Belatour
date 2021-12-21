<?php

namespace App\Controllers\Auth;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Code_model;

class Signup extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\UserModel';

    public function index()
    {
        $validation =  \Config\Services::validation();
        helper('utils');
        helper ('form');

        $id_user = guidv4();

        $full_name = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');
        $activation_code = generateKey($email);

        $data_user = [
            'id_user' => $id_user,
            'full_name' => $full_name,
            'email' => $email,
            'username' => $this->request->getPost('username'),
            'phone_number' => $this->request->getPost('phone_number'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $data_code = [
            'id_code' => guidv4(),
            'id_user' => $id_user,
            'key_code' => $activation_code,
            'dt_code_exp' => date('Y-m-d H:i:s', time() + (60 * 5))
        ];

        if ($validation->run($data_user, 'user') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors()
            ];
            return $this->respond($response, 500);
        } else {
            $saveUser = $this->model->insertUser($data_user);
            if ($saveUser) {
                $codeModel = new Code_model();
                $saveCode = $codeModel->insertCode($data_code);
                if ($saveCode) {
                    $msg = [
                        'message'       => 'User Account Created Successfully',
                        'confirmation'  => sendMailVerification($email, $full_name, $activation_code)
                    ];
                    $response = [
                        'status' => 200,
                        'error' => false,
                        'data' => $msg
                    ];
                }
                return $this->respond($response, 200);
            }
        }
    }
}
