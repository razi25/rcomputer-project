<?php

namespace App\Controllers;


use App\Models\HomeModel;

class error404 extends BaseController
{

    public function __construct()
    {

        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'page error 404';


        return view('/pages-error-404', $data);
    }
}
