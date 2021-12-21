<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrderModel extends Model
{
    protected $table = 'order_wisata';
    protected $primaryKey = 'id_order';
    protected $allowedFields = ['id_user','asal_instansi', 'id_paket', 'durasi', 'peserta', 'id_penginapan', 'id_transportasi', 'jadwal', 'total_harga', 'status'];
    protected $createdField   = 'created_at';

    public function getDetailOrder($id = false)
    {
        return $this->db->table($this->table)
            ->select('user.full_name, user.phone_number, order_wisata.asal_instansi, paket.nama_paket, order_wisata.durasi, order_wisata.peserta, penginapan.nama_tempat, transportasi.nama_transportasi, order_wisata.jadwal, order_wisata.total_harga')
            ->join('user', 'user.id_user = order_wisata.id_user', 'inner')
            ->join('paket', 'paket.id_paket = order_wisata.id_paket', 'inner')
            ->join('penginapan', 'penginapan.id_penginapan = order_wisata.id_penginapan', 'inner')
            ->join('transportasi', 'transportasi.id_transportasi = order_wisata.id_transportasi', 'inner')
            ->where('id_order', $id)
            ->get()->getRowArray();
    }
}