<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Returnn extends BaseController
{
    public function index()
    {
        return view('return/index');
    }
}
