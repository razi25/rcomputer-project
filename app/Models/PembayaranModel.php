<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pesanan';
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'Tanggal', 'kode_id', 'produk', 'pelanggan', 'stok', 'alamat', 'payment', 'harga', 'status'];

    public function getOrder($id)
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->join('produk', 'produk.kode=pesanan.kode_id');
        $builder->select('produk.harga as pis');
        $builder->select('pesanan.harga as price');
        $builder->where('pesanan.id', $id);
        return $builder->get();
    }
    public function success()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->join('produk', 'produk.kode=pembayaran.kode_id');
        $builder->select('produk.gambar as image');
        $builder->orderBy('date_out', 'DESC');
        return $builder->get();
    }

    public function transaksi()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->where('status', 'success');
        $builder->orderBy('Tanggal', 'DESC');
        return $builder->get();
    }

    public function deleteProduct($id)
    {
        $query = $this->db->table('pesanan')->delete(array('id' => $id));
        return $query;
    }
    public function updateProduct($data, $kode)
    {
        $query = $this->db->table('produk')->update($data, array('kode' => $kode));
        return $query;
    }
}
