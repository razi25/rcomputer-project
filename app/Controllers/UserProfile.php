<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;
use App\Models\HomeModel;

class UserProfile extends BaseController
{
    // public function index()
    // {
    //     $data['title'] = 'My Profile';
    //     return view('user/index', $data);
    // }

    protected $db, $builder;
    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $data['title'] = 'My Profile';

        $this->builder->select('users.id as userid, username, email, fullname, job, user_image, phone, alamat, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', user_id());
        $query = $this->builder->get();


        $data['user'] = $query->getRow();
        $pesanmodel = new HomeModel();
        $data['notif']  = $pesanmodel->notif()->getResult();
        $data['notifi']  = $pesanmodel->notifi()->getResult();
        $data['pesan']  = $pesanmodel->pesan()->getResult();
        $data['pesan1']  = $pesanmodel->pesan1()->getResult();
        return view('user/index', $data);
    }
    public function update()
    {
        $fileGambar = $this->request->getFile('gambar');
        $gambarlama = $this->request->getVar('gambarlama');

        //cek gambar apakah ada upload baru
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarlama;
        } else {
            //ubah nama menjadi random
            $namaGambar = $fileGambar->getRandomName();
            //pindahin ke folder img
            $fileGambar->move('img/', $namaGambar);
            //hapus gambar lama

            if ($gambarlama != 'user.jpg') {

                unlink('img/' . $gambarlama);
            }
        }

        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $data = array(
            'updated_at'        => $date,
            'email'        => $this->request->getPost('email'),
            'fullname'       => $this->request->getPost('fullname'),
            'job'       => $this->request->getPost('job'),
            'phone'       => $this->request->getPost('phone'),
            'alamat' => $this->request->getPost('alamat'),
            'user_image' => $namaGambar
        );
        $this->db->table('users')->where(['id' => user_id()])->update($data);
        return redirect()->to('/User');
    }

    public function updatePassword()
    {
        // $this->attributes['password_hash'] = Password::hash($password);

        //Rules for the update password form

        $old_password = $this->request->getVar('old-password');
        $new_password = $this->request->getVar('new-password');
        $confirm_password = $this->request->getVar('confirm-password');
        $rules = [
            'old-password' => [
                'label'  => 'old password',
                'rules'  => 'required|checkOldPasswords',
                'errors' => [
                    'required' => 'Put your message here',
                    'checkOldPasswords' => 'Put your message here',
                ]
            ],
            'new-password' => [
                'label'  => 'new password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Put your message here',

                ]
            ],
            'confirm-new-password' => [
                'label'  => 'confirm password',
                'rules'  => 'required|matches[new-password]',
                'errors' => [
                    'required' => 'Put your message here',
                    'matches' => 'Put your message here'
                ]
            ],
        ];

        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            //Create new instance of the MythAuth UserModel
            $users = model(UserModel::class);

            //Get the id of the current user
            $user_id = user_id();

            //Create new user entity
            $entity = new User();

            //Get current password from input field
            $newPassword = $this->request->getPost('new-password');

            //Hash password using the "setPassword" function of the User entity
            $entity->setPassword($newPassword);

            //Save the hashed password in the variable "hash"
            $hash  = $entity->password_hash;

            //update the current users password_hash in the database with the new hashed password.
            $users->update($user_id, ['password_hash' => $hash]);

            //Return back with success message
            return redirect()->to('/User')->with('success', "Put your message here");
        } else {
            //Return with errors
            return redirect()->to('/User')->withInput()->with('error', "Put your message here");
        }
    }
}
