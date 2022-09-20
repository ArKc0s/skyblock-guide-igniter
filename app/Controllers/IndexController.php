<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function view() {
        helper('url');
        return view('pages/index');
    }

}