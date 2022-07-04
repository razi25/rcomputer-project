<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;
use App\Models\produkModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;
    public function __construct()
    {

        $this->pembayaranModel = new PembayaranModel();
        $this->transaksiModel = new transaksiModel();
        $this->produkModel = new produkModel();
    }
    public function index()
    {
        $pesanmodel = new HomeModel();
        $model = new PembayaranModel();
        $data['title'] = 'Tabel Pembayaran Success';
        $data['pembayaran']  = $model->success()->getResult();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();

        return view('pembayaran/Tabel_Success', $data);
    }
    public function transaksi($id = 0)
    {
        $data['title'] = 'Pembayaran Barang';
        $pesanmodel = new HomeModel();
        $model = new PembayaranModel();
        $data['pembayaran']  = $model->getOrder($id)->getResult();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();



        return view('pembayaran/transaksi', $data);
    }

    public function updatereject($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $status = 'rejected';
        $this->pembayaranModel->save([
            'id' => $id,
            'Tanggal' => $date,
            'status' => $status


        ]);
        session()->setFlashdata('Status', "Status Barang ORD$id menjadi rejected");
        return redirect()->to('/pesanan');
    }
    public function save($id)
    {


        $status = 'success';
        $this->transaksiModel->save([

            'date_in'        => $this->request->getVar('date_in'),
            'id_order' => $this->request->getVar('id_order'),
            'kode_id'        => $this->request->getVar('kode_id'),
            'produk'        => $this->request->getVar('produk'),
            'pelanggan'       => $this->request->getVar('pelanggan'),
            'jumlah'       => $this->request->getVar('jumlah'),
            'alamat' => $this->request->getVar('alamat'),
            'payment' => $this->request->getVar('payment'),
            'harga'       => $this->request->getVar('harga'),
            'diskon'       => $this->request->getVar('diskon'),
            'total'       => $this->request->getVar('total'),
            'status'       => $status,
            'admin'       => $this->request->getVar('admin'),
            'date_out'       => $this->request->getVar('date_out')


        ]);

        //Delete data tabel pesanan 
        // $this->pembayaranModel->delete([
        //     'id' => $id,
        // ]);

        //kalau ingin di tabel pesanan namun status berubah

        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $cust = $this->request->getVar('pelanggan');
        $this->pembayaranModel->save([
            'id' => $id,
            'Tanggal' => $date,
            'status' => $status,
            'pelanggan' => $cust
        ]);

        //update tabel produk untuk jumlah stok 
        $kode = $this->request->getVar('kode');
        $stok = $this->request->getVar('stok');
        $jumlah = $this->request->getVar('jumlah');
        $totalstok = $stok - $jumlah;
        $data = array(

            'stok' => $totalstok
        );

        $this->produkModel->updateProduct($data, $kode);
        //End update tabel produk untuk jumlah stok 

        session()->setFlashdata('Status', "Transaksi Berhasil");
        return redirect()->to('/pesanan/Tabel_Success');
    }
}
