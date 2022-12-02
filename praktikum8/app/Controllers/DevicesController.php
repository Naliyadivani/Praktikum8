<?php

namespace App\Controllers;

class DevicesController extends BaseController{
    public function index(){   
        $data=[
            'title' => 'Daftar Barang',
            'device' => [
                [
                    'id' => 1,
                    'gambar' => '<img src ="../../public/gambar/arduino.png" width="100" height = "100">',
                    'nama' => 'Arduino',
                    'merek' => 'Genuino',
                    'jumlah' => 19,
                    'status' => 1,
                    'detail' => '<a  href = "/praktikum8/public/pages/deviceDetail"> Details </a>'
                ],
                [
                    'id' => 2,
                    'gambar' => '<img src = "../../public/gambar//komputer.png" width="100" height = "100">',
                    'nama' => 'Komputer',
                    'merek' => 'Samsung',
                    'jumlah' => 20,
                    'status' => 1,
                    'detail' => '<a href = "/praktikum8/public/pages/deviceDetail"> Details </a>'
                ],
                [
                    'id' => 3,
                    'gambar' => '<img src = "../../public/gambar/projector.png" width="100" height = "100">',
                    'nama' => 'Projector',
                    'merek' => 'Canon',
                    'jumlah' => 2,
                    'status' => 0,
                    'detail' => '<a href = "/praktikum8/public/pages/deviceDetail"> Details </a>'
                ]
            ]
        ];
        return view('pages/device', $data);
    }
}