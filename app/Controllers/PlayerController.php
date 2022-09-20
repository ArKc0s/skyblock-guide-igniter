<?php

namespace App\Controllers;

class PlayerController extends BaseController
{

    public function getPlayer() {

        $data['playerName'] = $this->request->getGet('playerName');
        return view('pages/player', $data);

    }

}