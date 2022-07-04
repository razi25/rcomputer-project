<?php

namespace App\Controllers;

use App\Models\ServisModel;
use App\Models\HomeModel;


class Tabel_Servis extends BaseController
{
    protected $servisModel;
    public function __construct()
    {
        // cara 1
        // $laptopModel = new \App\Models\LaptopModel();

        //cara 2
        $this->servisModel = new ServisModel();
    }


    // public function index()
    // {
    //     // $currentPage = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;
    //     $produk = $this->produkModel->findAll();
    //     $data = [
    //         'title' => 'Daftar Produk',
    //         'produk' => $produk
    //         // 'currentPage' => $currentPage
    //     ];
    //     return view('DataProduk/Tabel_Produk', $data);
    // }


    public function index()
    {


        $data['title'] = 'Tabel Servis';
        $data['servis']  = $this->servisModel->getServis()->getResult();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        echo view('DataServis/Tabel_Servis', $data);
    }

    public function save()
    {




        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');


        $data = array(
            'date_in'        => $date,
            'pemilik'        => $this->request->getPost('pemilik'),
            'barang'       => $this->request->getPost('barang'),
            'kerusakan'       => $this->request->getPost('kerusakan'),


        );

        $this->servisModel->saveProduct($data);
        return redirect()->to('/Tabel_Servis');
    }

    public function update()
    {


        date_default_timezone_set('Asia/Jakarta');


        $id = $this->request->getPost('id');
        $data = array(
            'date_in'        => $this->request->getPost('date_in'),
            'pemilik'        => $this->request->getPost('pemilik'),
            'barang'       => $this->request->getPost('barang'),
            'kerusakan'       => $this->request->getPost('kerusakan'),
            'perbaikan'       => $this->request->getPost('perbaikan'),
            'date_out' => $this->request->getPost('date_out'),
            'biaya'       => $this->request->getPost('biaya'),
            'keterangan' => $this->request->getPost('keterangan')
        );
        $this->servisModel->updateProduct($data, $id);
        return redirect()->to('/Tabel_Servis');
    }

    public function delete()
    {

        $id = $this->request->getPost('id');


        $this->servisModel->deleteProduct($id);
        return redirect()->to('/Tabel_Servis');
    }
}
