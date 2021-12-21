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
        $data = $model->getDetailOrder(['id_order' => $id]);
        if($data){
            $data['durasi'] = $this->formatDurasi($data['durasi']);
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

    public function formatDurasi($durasi){
        $hari = $durasi/24;
        $malam = 0;
        if ($durasi%24 > 0) $malam += 1;
        $text = (int)$hari . " Hari " . ((int)$hari + $malam) . " Malam";
        return $text;
    }
 
}