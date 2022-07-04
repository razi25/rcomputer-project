<?php

namespace App\Controllers;

use App\Models\HomeModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        $this->builder->select('users.id as userid, username, email, name, active, job');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('auth_groups.id !=', '1');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
        return view('admin/index', $data);
    }
    public function detail($id = 0)
    {
        $data['title'] = 'User Details';
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();


        $this->builder->select('users.id as userid, username, email, user_image, name, active');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }
        return view('admin/detail', $data);
    }
    public function updatestatus($id = 0)
    {
        $id = $this->request->getPost('userid');




        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $data = array(
            'updated_at'        => $date,
            'active'        => $this->request->getVar('status'),

        );
        $this->db->table('users')->where(['id' => $id])->update($data);
        return redirect()->to('/admin');
    }
}
