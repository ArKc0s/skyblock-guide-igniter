<?php

namespace App\Controllers;

class IndexController extends BaseController
{

    public function view()
    {
        helper('url');
        return view('pages/index');
    }

    public function validatePlayer()
    {

        $playerName = $this->request->getVar('playerName');
        //TODO: Check if player exists in Hypixel Skyblock API
        return redirect()->to('/player/'.$playerName);

    }

}