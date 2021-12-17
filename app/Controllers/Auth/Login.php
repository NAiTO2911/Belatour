<?php namespace App\Controllers\Auth;
 
use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    
    protected $format       = 'json';
    protected $modelName    = 'App\Models\UserModel';
 
    public function index() {
        $validation =  \Config\Services::validation();
        
        $id_user = $this->request->getPost('id_user');
        $password = $this->request->getPost('password');
        
        $data_login = [
            'id_user' => $id_user,
            'password' => $password
        ];
        
        if($validation->run($data_login, 'login') == FALSE){
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors()
            ];
            return $this->respond($response, 500);
        } else {
            $getUser = $this->model->checkUser($id_user);
            if($getUser){
                $code = 200;
                if(password_verify($password, $getUser['password'])) {
                    $error = false;
                    $msg = [
                        'id_user' => $getUser['id_user'],
                        'email' => $getUser['email'],
                        'full_name' => $getUser['full_name']
                    ];
                } else {
                    $error = true;
                    $msg = ['message' => 'Your Password is Wrong'];
                }
                $response = [
                    'status' => $code,
                    'error' => $error,
                    'data' => $msg
                ];
            } else {
                $code = 401;
                $msg = ['message' => 'User Not Found'];
                $response = [
                    'status' => $code,
                    'error' => true,
                    'data' => $msg
                ];
            }
            return $this->respond($response, $code);
        }
    }
    
}