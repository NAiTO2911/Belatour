<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Signup extends BaseController {
    
    public function index() {
		$mData['menu'] = "Signup";

        echo view('templates/head', $mData);
		echo view('signup');
		echo view('templates/footer');
	}

    public function success(){
        $mData['menu'] = "Signup";

        echo view('templates/head', $mData);
		echo view('signup_success');
		echo view('templates/footer');
    }
    
}