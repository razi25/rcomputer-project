<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\HomeModel;

class Pesanan extends BaseController
{
    protected $PesananModel;
    public function __construct()
    {
        // cara 1
        // $laptopModel = new \App\Models\LaptopModel();

        //cara 2
        $this->produkModel = new PesananModel();
    }


    public function index()
    {
        $pesanmodel = new HomeModel();
        $model = new PesananModel();
        $data['title'] = 'Tabel Pesanan';
        $data['pesanan']  = $model->getOrder()->getResult();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        echo view('Pesanan/index', $data);
    }
    public function pending()
    {
        $pesanmodel = new HomeModel();
        $model = new PesananModel();
        $data['title'] = 'Tabel Pesanan';
        $data['pesanan']  = $model->pending()->getResult();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        echo view('Pesanan/index', $data);
    }

    public function delete()
    {
        $model = new PesananModel();
        $id = $this->request->getPost('id');


        $model->deleteProduct($id);
        session()->setFlashdata('del', "Data barang ORD$id berhasil di Hapus");
        return redirect()->to('/Pesanan');
    }
}
