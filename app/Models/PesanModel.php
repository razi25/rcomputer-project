<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'message';
    protected $useTimestamp = true;
    protected $allowedFields = ['date_in', 'status_msg', 'nama', 'subjek', 'email', 'pesan'];

    public function getMessage()
    {
        $builder = $this->db->table('message');
        $builder->select('*');
        $builder->join('users', 'users.email=message.email');
        $builder->orderBy('date_in', 'DESC');
        return $builder->get();
    }
    public function updateMessage($data, $id_msg)
    {
        $query = $this->db->table('message')->update($data, array('id_msg' => $id_msg));
        return $query;
    }
    public function deleteMessage($id_msg)
    {
        $query = $this->db->table('message')->delete(array('id_msg' => $id_msg));
        return $query;
    }
}
