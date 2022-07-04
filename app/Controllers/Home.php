<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    protected $HomeModel;
    public function __construct()
    {

        $this->HomeModel = new HomeModel();
    }
    public function index()
    {
        $data['title'] = 'Home';

        $pesanmodel = new HomeModel();

        $data['pesanan']  = $pesanmodel->getOrder()->getResult();
        $data['toppesanan']  = $pesanmodel->topOrder()->getResult();
        $data['topsale']  = $pesanmodel->topSale()->getResult();
        $data['topsalemonth']  = $pesanmodel->topSaleMonth()->getResult();
        $data['topsaleyear']  = $pesanmodel->topSaleYear()->getResult();
        $data['chardiagram']  = $pesanmodel->chartdiagram()->getResult();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        $data['recent']  = $pesanmodel->recent()->getResult();
        $data['recenttoday']  = $pesanmodel->recenttoday()->getResult();
        $data['recentmonth']  = $pesanmodel->recentmonth()->getResult();
        $data['recentyear']  = $pesanmodel->recentyear()->getResult();
        $data['topcust']  = $pesanmodel->topCust()->getResult();
        return view('/Home', $data);
    }
}
