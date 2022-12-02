<?php

namespace App\Controllers;


class DeviceDetailController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Barang'
        ];

        return view('pages/deviceDetail', $data);
    }
    public function barang1() {
        $data =[
            'title' => 'Arduino'
        ];
        return view('pages/arduino', $data);
    }
    public function barang2() {
        $data =[
            'title' => 'Samsung'
        ];
        return view('pages/barang2', $data);
    }
    public function barang3() {
        $data =[
            'title' => 'Canon'
        ];
        return view('pages/barang3', $data);
    }
}
?>