<?php

namespace App\Controllers;

class GuideController extends BaseController
{

    public function viewGuides()
    {
        return view('pages/guides');
    }

    public function viewGuide($guideId = null)
    {
        return view('pages/guides/'.$guideId);
    }


}