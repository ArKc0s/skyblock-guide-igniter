<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function view() {
        helper('url');
        return view('pages/index');
    }

    public function validatePlayer() {

        $playerName = $this->request->getVar('playerName');
        print_r($playerName);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        return redirect()->to('/player/'.$playerName);

    }

}