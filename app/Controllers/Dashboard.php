<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BannerModel;
use App\Models\PaketModel;
use App\Models\WisataModel;

class Dashboard extends BaseController {
    
    public function index() {
        $bannerModel = new BannerModel();
        $mData['banner'] =  $bannerModel->findAll();

        $paketModel = new PaketModel();
        $data['paket'] = $paketModel->getPaket();

        $wisataModel = new WisataModel();
        $data['wisata'] = $wisataModel->findAll();

        echo view('templates/header', $mData);
		echo view('dashboard', $data);
		echo view('templates/footer');
	}
    
}