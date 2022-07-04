<?php

namespace App\Controllers;

use App\Models\kategoriModel;
use App\Models\HomeModel;


class Tabel_Kategori extends BaseController
{
    protected $KategoriModel;
    public function __construct()
    {
        // cara 1
        // $laptopModel = new \App\Models\LaptopModel();

        //cara 2
        $this->kategoriModel = new kategoriModel();
    }
    public function index($id = null)
    {
        $model = new kategoriModel();
        // $currentPage = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;
        $data['title'] = 'Tabel Kategori';
        $data['kategori'] = $model->getCategory()->getResult();
        $data['subkategori'] = $model->getKategoriProduct($id)->getResult();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        echo view('DataProduk/Tabel_Kategori', $data);
    }
    public function save()
    {
        $model = new kategoriModel();
        $data = array(

            'kategori'        => $this->request->getPost('kategori'),

        );

        $model->saveKategori($data);
        return redirect()->to('/Tabel_Kategori');
    }

    public function update()
    {


        $model = new kategoriModel();
        $id = $this->request->getPost('id');
        $data = array(

            'kategori'        => $this->request->getPost('kategori'),

        );
        $model->updateKategori($data, $id);
        return redirect()->to('/Tabel_Kategori');
    }

    public function delete()
    {
        $model = new kategoriModel();
        $id = $this->request->getPost('id');

        $model->deleteKategori($id);
        return redirect()->to('/Tabel_Kategori');
    }
    public function saveSub()
    {
        $model = new kategoriModel();
        $kategori_id = $this->request->getPost('kategori_id');
        $data = array(

            'subkategori'        => $this->request->getPost('subkategori'),
            'kategori_id'        => $this->request->getPost('kategori_id')

        );

        $model->saveSubKategori($data);
        return redirect()->to('Tabel_Kategori/' . $kategori_id);
    }

    public function updateSub()
    {


        $model = new kategoriModel();
        $id_sub = $this->request->getPost('id_sub');
        $kategori_id = $this->request->getPost('kategori_id');
        $data = array(

            'subkategori'        => $this->request->getPost('subkategori'),

        );
        $model->updateSubKategori($data, $id_sub);
        return redirect()->to('Tabel_Kategori/' . $kategori_id);
    }

    public function deleteSub()
    {
        $model = new kategoriModel();
        $id_sub = $this->request->getPost('id_sub');
        $kategori_id = $this->request->getPost('kategori_id');
        $model->deleteSubKategori($id_sub);
        return redirect()->to('Tabel_Kategori/' . $kategori_id);
    }
}
