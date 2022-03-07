<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Pembayaran Spp'];
        return view('landingpage', $data);
    }
}
