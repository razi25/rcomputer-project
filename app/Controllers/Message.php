<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\PesanModel;

class Message extends BaseController
{
    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('message');
        $this->pesanModel = new PesanModel();
    }
    public function index()
    {
        $data['title'] = 'Pesan Masuk';
        $messagemodel = new PesanModel();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        $data['message']  = $messagemodel->getMessage()->getResult();


        // $data['topcust']  = $pesanmodel->topCust()->getResult();
        return view('Message/index', $data);
    }
    public function detail($id = 0)
    {
        $data['title'] = 'Pesan Masuk';

        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();


        $this->builder->select('*');
        $this->builder->join('users', 'users.email=message.email');
        $this->builder->where('message.id_msg', $id);
        $query = $this->builder->get();

        $data['message'] = $query->getRow();

        if (empty($data['message'])) {
            return redirect()->to('/Message');
        }
        return view('Message/Message', $data);
    }

    public function update()
    {


        $model = new PesanModel();
        $id_msg = $this->request->getPost('id_msg');
        $status = '0';
        $data = array(

            'status_msg'        => $status

        );
        $model->updateMessage($data, $id_msg);
        return redirect()->to('/Message');
    }
    public function delete()
    {
        $model = new PesanModel();
        $id_msg = $this->request->getPost('id_msg');


        $model->deleteMessage($id_msg);
        return redirect()->to('/Message');
    }
}
