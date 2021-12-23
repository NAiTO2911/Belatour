<?php namespace App\Controllers\Api;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\OrderModel;
 
class Order extends ResourceController
{
    use ResponseTrait;
    // get all wisata
    public function index()
    {
        $model = new OrderModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single order
    public function show($id = null)
    {
        $model = new OrderModel();
        helper('utils');

        $data = $model->getDetailOrder(['id_order' => $id]);
        if($data){
            $data['durasi'] = formatDurasi($data['durasi']);
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
}