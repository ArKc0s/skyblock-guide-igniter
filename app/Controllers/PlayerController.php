<?php

namespace App\Controllers;

class PlayerController extends BaseController
{

    public function getPlayer($playername = null)
    {
        echo $playername;
    }

}