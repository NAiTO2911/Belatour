<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class Dashboard extends BaseController {
    
    public function index() {
        $model = new WisataModel();
        $id = 1101;
        $data['wisata'] = $model->getWisataByIdKab($id);
		echo view('dashboard', $data);
	}
    
}