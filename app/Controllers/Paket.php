<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;

class Paket extends BaseController {
    
    public function show($id = null) {
		$mData['menu'] = "Paket";

		$paketModel = new PaketModel();
        $data['paket'] = $paketModel->getPaket($id);

        echo view('templates/head', $mData);
		echo view('paket', $data);
		echo view('templates/footer');
	}

	public function order($id = null) {

	}
    
}