<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BannerModel;

class Dashboard extends BaseController {
    
    public function index() {
        $model = new BannerModel();        
        $mData['banner'] =  $model->findAll();

        echo view('templates/header', $mData);
		echo view('dashboard');
		echo view('templates/footer');
	}
    
}