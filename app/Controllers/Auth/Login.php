<?php namespace App\Controllers\Auth;
 
use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    
    protected $format       = 'json';
    protected $modelName    = 'App\Models\UserModel';

    public function index() {
        $validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        
        helper('form');

        $id_user = $this->request->getPost('username');
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
                        'id_user' => $getUser['username'],
                        'email' => $getUser['email'],
                        'full_name' => $getUser['full_name']
                    ];
                    $data = array(
                        'username' => $getUser['username'],
                        'hak_akses' => 777,
                        'loggedIn' => true
                        );
                    $this->session->set($data);
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
            return redirect()->to(base_url('dashboard'));
            #return $this->respond($response, $code);
        }
    }
    
}