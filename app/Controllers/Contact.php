<?php

namespace App\Controllers;

use App\Models\PesanModel;
use App\Models\HomeModel;

class Contact extends BaseController
{
    protected $pesanModel;
    public function __construct()
    {

        $this->pesanModel = new PesanModel();
    }
    public function index()
    {
        $data['title'] = 'Contact';
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        return view('/Contact', $data);
    }
    public function save()
    {
        // //validasi data kosong ato gak
        // if (!$this->validate([
        //     // 'nama' => [
        //     //     'rules' => 'required',
        //     //     'errors' => [
        //     //         'required' => '{field} nama harus diisi'
        //     //     ]
        //     // ],
        //     // 'email' => [
        //     //     'rules' => 'required',
        //     //     'errors' => [
        //     //         'required' => '{field} email harus diisi'
        //     //     ]
        //     // ],
        //     'subjek' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Subject harus diisi'
        //         ]
        //     ],
        //     'pesan' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Pesan harus diisi'
        //         ]
        //     ]
        //     //apabila harus upload gambar tambahkan rules 'uploaded[gambar]' dan di errors uploaded=>'gambar harus diupload'
        // ])) {
        //     // $validation = \Config\Services::validation();
        //     return redirect()->to('Contact')->withInput();
        // }

        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $status = '1';
        $this->pesanModel->save([
            'date_in' => $date,
            'status_msg' => $status,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'subjek' => $this->request->getVar('subjek'),
            'pesan' => $this->request->getVar('pesan'),


        ]);
        session()->setFlashdata('pesan', 'Pesan Berhasil dikirim');
        return redirect()->to('/Contact');
    }
}
