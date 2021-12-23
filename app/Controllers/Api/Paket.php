<?php namespace App\Controllers\Api;
 
use CodeIgniter\RESTful\ResourceController;
 
class Paket extends ResourceController
{

    protected $format       = 'json';
    protected $modelName    = 'App\Models\PaketModel';

    // get all paket
    public function index()
    {
        $data = $this->model->getPaket();
        return $this->showResponse($data);
    }

    public function show($id = null){

    }
 
    public function showResponse($data) {
        if($data){
            $code = 200;
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $data
            ];
        } else {
            $code = 401;
            $response = [
                'status' => $code,
                'error' => true,
                'data' => ['message' => 'Data not found!']
            ];
        }
        return $this->respond($response, $code);
    }
 
}