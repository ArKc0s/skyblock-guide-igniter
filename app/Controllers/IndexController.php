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

        return redirect()->to('/player/'.$playerName);

    }

}