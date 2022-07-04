<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = ['pesanan'];
    protected $useTimestamp = true;
    protected $allowedFields = ['id', 'Tanggal', 'kode_id', 'produk', 'pelanggan', 'stok', 'alamat', 'payment', 'harga', 'status', 'gambar'];

    public function getOrder()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');

        $builder->orderBy('Tanggal', 'DESC');

        return $builder->get();
    }
    public function topOrder()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->join('produk', 'produk.kode=pembayaran.kode_id');
        $builder->selectSum('pembayaran.jumlah');
        $builder->selectSum('pembayaran.harga');
        $builder->groupBy('pembayaran.produk');
        $builder->orderBy('pembayaran.jumlah', 'DESC');


        return $builder->get();
    }
    public function topSale()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->select('pelanggan,COUNT(distinct pelanggan) as cust');
        $builder->selectSum('jumlah');
        $builder->selectSum('total');
        date_default_timezone_set('Asia/Jakarta');
        $builder->where('day(date_out)', date('d'));
        //untuk Bulan
        // $builder->where('month(date_out)', date('m'));
        //untuk Tahun
        // $builder->where('year(date_out)', date('Y'));
        return $builder->get();
    }
    public function topSaleMonth()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->select('pelanggan,COUNT(distinct pelanggan) as cust');
        $builder->selectSum('jumlah');
        $builder->selectSum('total');
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        // $builder->where('(date_out >= NOW())');
        //untuk Bulan
        $builder->where('month(date_out)', date('m'));
        //untuk Tahun
        // $builder->where('year(date_out)', date('Y'));
        return $builder->get();
    }
    public function topSaleYear()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->select('pelanggan,COUNT(distinct pelanggan) as cust');
        $builder->selectSum('jumlah');
        $builder->selectSum('total');
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        // $builder->where('(date_out >= NOW())');
        //untuk Bulan
        // $builder->where('month(date_out)', date('m'));
        //untuk Tahun
        $builder->where('year(date_out)', date('Y'));
        return $builder->get();
    }

    public function chartdiagram()
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('*');
        $builder->select('pelanggan,COUNT(distinct pelanggan) as cust');
        $builder->selectSum('jumlah');
        $builder->selectSum('total');
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');

        $builder->groupBy('month(date_out)', date('m'));

        return $builder->get();
    }

    public function notif()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->where('status', 'pending');
        $builder->orderBy('Tanggal', 'DESC');
        $builder->limit('3');
        return $builder->get();
    }
    public function notifi()
    {
        $builder = $this->db->table('pesanan');
        $builder->select('*');
        $builder->select('status,COUNT(status) as stat');
        $builder->where('status', 'pending');
        $builder->orderBy('Tanggal', 'DESC');

        return $builder->get();
    }
    public function recent()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->orderBy('date_in', 'DESC');
        $builder->limit('5');
        return $builder->get();
    }
    public function recenttoday()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->select('pemilik,COUNT(distinct pemilik) as customer');
        $builder->selectSum('biaya');
        date_default_timezone_set('Asia/Jakarta');
        $builder->where('day(date_out)', date('d'));

        return $builder->get();
    }
    public function recentmonth()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->select('pemilik,COUNT(distinct pemilik) as customer');
        $builder->selectSum('biaya');
        $builder->where('month(date_out)', date('m'));

        return $builder->get();
    }
    public function recentyear()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->select('pemilik,COUNT(distinct pemilik) as customer');
        $builder->selectSum('biaya');
        $builder->where('year(date_out)', date('Y'));

        return $builder->get();
    }
    public function topCust()
    {
        $builder = $this->db->table('servis');
        $builder->select('*');
        $builder->groupBy('pemilik');
        $builder->selectSum('biaya');
        $builder->orderBy('biaya', 'DESC');
        $builder->limit('5');
        return $builder->get();
    }
    public function pesan()
    {
        $builder = $this->db->table('message');
        $builder->select('*');
        $builder->join('users', 'users.email=message.email');
        $builder->where('message.status_msg', '1');
        $builder->orderBy('date_in', 'DESC');
        $builder->limit('3');

        return $builder->get();
    }
    public function pesan1()
    {
        $builder = $this->db->table('message');
        $builder->select('*');
        $builder->select('status_msg,COUNT(status_msg) as stat');
        $builder->where('status_msg', '1');
        $builder->orderBy('date_in', 'DESC');

        return $builder->get();
    }
}
