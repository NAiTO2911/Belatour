<?php namespace App\Controllers\Api;

use App\Controllers\BaseController;
use Config\Services;

class Account extends BaseController {

    public function login() {
        $this->session = Services::session();
        if ($this->session->has('loggedIn')) {
            return redirect()->to(base_url('dashboard'));
        }
        
        return view('login');
	}

    public function signup() {
        $this->session = Services::session();
        if ($this->session->has('loggedIn')) {
            return redirect()->to(base_url('dashboard'));
        }
        
        return view('signup');
	}

    public function logout() {
        $session = Services::session();
        if ($session->has('loggedIn')) {
            $data = ['username', 'loggedIn'];
            $session->remove($data);
        }
        return redirect()->to(base_url('dashboard'));
	}

}