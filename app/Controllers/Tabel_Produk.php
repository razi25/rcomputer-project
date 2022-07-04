<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\HomeModel;
use App\Models\PesananModel;

class Tabel_Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        // cara 1
        // $laptopModel = new \App\Models\LaptopModel();

        //cara 2
        $this->produkModel = new produkModel();
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

        $model = new produkModel();
        $data['title'] = 'Tabel Produk';
        $data['produk']  = $model->getProduct()->getResult();
        $data['kategori'] = $model->getCategory()->getResult();
        $data['subkategori'] = $model->getKategoriProduct()->getResult();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        echo view('DataProduk/Tabel_Produk', $data);
    }

    public function save()
    {
        $fileGambar = $this->request->getFile('gambar');
        $harga = $this->request->getVar('harga');
        $hargabaru = str_replace(".", "", $harga);
        // apakah ada gambar yang di upload ?
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.png';
        } else {
            //kasih nama file random
            $namaGambar = $fileGambar->getRandomName();
            //pindahin file gambar nya
            $fileGambar->move('imgproduk/', $namaGambar);


            // ambil nama file sesuai nama yang di upload
            // $fileGambar->move('img');
            // $namaGambar = $fileGambar->getName();
        }
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $model = new produkModel();

        $data = array(
            'tanggal'        => $date,
            'produk'        => $this->request->getPost('produk'),
            'kategori_id'       => $this->request->getPost('kategori_id'),
            'subkategori_id'       => $this->request->getPost('subkategori_id'),
            'keterangan'       => $this->request->getPost('keterangan'),
            'stok' => $this->request->getPost('stok'),
            'harga'       => $hargabaru,
            'gambar' => $namaGambar
        );

        $model->saveProduct($data);
        session()->setFlashdata('info', "Data barang berhasil di Upload");
        return redirect()->to('/Tabel_Produk');
    }

    public function update()
    {
        $harga = $this->request->getVar('harga');
        $hargabaru = str_replace(".", "", $harga);
        $fileGambar = $this->request->getFile('gambar');
        $gambarlama = $this->request->getVar('gambarlama');
        //cek gambar apakah ada upload baru
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarlama;
        } else {
            //ubah nama menjadi random
            $namaGambar = $fileGambar->getRandomName();
            //pindahin ke folder img
            $fileGambar->move('imgproduk/', $namaGambar);
            //hapus gambar lama

            if ($gambarlama != 'default.png') {

                unlink('imgproduk/' . $gambarlama);
            }
        }
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $model = new produkModel();
        $id = $this->request->getPost('kode');
        $data = array(
            'tanggal'        => $date,
            'produk'        => $this->request->getPost('produk'),
            'kategori_id'       => $this->request->getPost('kategori_id'),
            'subkategori_id'       => $this->request->getPost('subkategori_id'),
            'keterangan'       => $this->request->getPost('keterangan'),
            'stok' => $this->request->getPost('stok'),
            'harga'       => $hargabaru,
            'gambar' => $namaGambar
        );
        $model->updateProduct($data, $id);
        session()->setFlashdata('info', "Data barang ORD$id berhasil di Update");
        return redirect()->to('/Tabel_Produk');
    }

    public function order()
    {

        $harga = $this->request->getVar('harga');
        $hargabaru = str_replace(".", "", $harga);
        $produk = $this->request->getVar('produk');
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $model = new PesananModel();
        $status = 'pending';
        $data = array(

            'tanggal'        => $date,
            'kode_id'        => $this->request->getPost('kode'),
            'produk'        => $this->request->getPost('produk'),
            'pelanggan'       => $this->request->getPost('pelanggan'),
            'jumlah'       => $this->request->getPost('jumlah'),
            'alamat' => $this->request->getPost('alamat'),
            'payment' => $this->request->getPost('payment'),
            'harga'       => $hargabaru,
            'status'       => $status

        );

        $model->saveProduct($data);
        session()->setFlashdata('order', "Produk  $produk berhasil dipesan, silahkan Confirm di Halaman Pesanan");
        return redirect()->to('/Tabel_Produk');
    }
    public function delete()
    {
        $model = new produkModel();
        $id = $this->request->getPost('kode');

        $gambar = $this->request->getPost('gambar');
        if ($gambar != 'default.png') {

            unlink('imgproduk/' . $gambar);
        }
        $model->deleteProduct($id);
        session()->setFlashdata('delete', "Data barang ORD$id berhasil di Hapus");
        return redirect()->to('/Tabel_Produk');
    }
}
