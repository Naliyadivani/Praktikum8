<?php

namespace App\Controllers;

class HomeController extends BaseController {
    public function index(){
        $data=[
            'title' => 'Home | Web IoT'
        ];
        return view('pages/home', $data);
    }
}