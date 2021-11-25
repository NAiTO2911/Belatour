<?php namespace App\Controllers\Api;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\WisataModel;
use Config\Services;
 
class Wisata extends ResourceController
{
    use ResponseTrait;
    // get all wisata
    public function index()
    {
        $model = new WisataModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new WisataModel();
        $data = $model->getWhere(['id_wisata' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
 
    // create a product
    public function create()
    {
        $file = $this->request->getFile('image');
        $newfilename = null;

        $session = Services::session();
        if(!empty($_FILES['image']['name']))
        {
            if (!$this->validate([
                'image' => [
                    'rules' => 'uploaded[image]|mime_in[image,image/png,image/jpg,image/jpeg]|max_size[image,1024]',
                    'errors' => [
                        'uploaded' => 'There must be a file uploaded',
                        'mime_in' => 'File Extension Must Be jpg or png.',
                        'max_size' => 'Maximum File Size 1 MB'
                    ]

                ]
            ])) {
                return $session->setFlashdata('errors', $this->validator->getErrors());
            } else
            {
                $img_opt = $file->getName();

                // Renaming file before upload
                $temp = explode(".",$img_opt);
                $newfilename = round(microtime(true)) . '.' . end($temp);

                if (!$file->move("images", $newfilename))
                {
                    return $session->setFlashdata('errors', array('msg' => 'Failed to upload image'));
                }
            }
        }

        $model = new WisataModel();
        $data = [
            'nama_wisata' => $this->request->getPost('nama_wisata'),
            'img_thumbnail' => $newfilename,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'alamat' => $this->request->getPost('alamat'),
            'id_kabupaten' => $this->request->getPost('id_kab')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
         
        return $this->respondCreated($response, 201);
    }
 
    // update product
    public function update($id = null)
    {
        $model = new ProductModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'product_name' => $json->product_name,
                'product_price' => $json->product_price
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'product_name' => $input['product_name'],
                'product_price' => $input['product_price']
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }
 
    // delete product
    public function delete($id = null)
    {
        $model = new ProductModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
         
    }
 
}