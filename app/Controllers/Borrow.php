<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Borrow extends BaseController
{
    public function index()
    {
        $data = ['F', 'L', 'P'];
        return view('borrow/index', $data);
    }

    public function borrowList()
    {
        return view('borrow/borrow-list');
    }

    public function borrowFd()
    {
        return view('borrow/form-borrow-fd');
    }

    public function autocomplete()
    {
        // $nik = $this->input->get('nik');
        $nik = $_GET['nik'];
        // $nik = $this->input->post('nik', true);
        $cari = $this->Orang_model->getDataOrang($nik);

        if ($cari) {
            echo json_encode($cari);
        } else {
            echo json_encode(array('error' => 'No rows, or there was more than one row'));
        }
    }
}
