<?php namespace App\Models;
 
use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id_paket';
    protected $allowedFields = ['nama_paket','durasi', 'kuota', 'harga', 'from_kab'];

    public function getPaket()
    {
        $query = $this->db->table($this->table)
            ->select('paket.id_paket, paket.nama_paket, paket.durasi, paket.kuota, paket.harga, kabupaten.nama')
            ->join('kabupaten', 'kabupaten.id_kab = paket.from_kab', 'inner')
            ->get();
        
        $data = [];
        foreach ($query->getResultArray() as $key=>$row) {
            $data[$key] = [];
            $data[$key]['id_paket'] = $row['id_paket'];
            $data[$key]['nama_paket'] = $row['nama_paket'];
            $data[$key]['durasi'] = $row['durasi'];
            $data[$key]['kuota'] = $row['kuota'];
            $data[$key]['harga'] = $row['harga'];
            $data[$key]['from_kab'] = $row['nama'];
            $data[$key]['wisata'] = $this->getWisataByIdPaket($row['id_paket']);
        }

        return $data;
    }

    public function getWisataByIdPaket($id = false) {
        return $this->db->table('paket_wisata')
            ->select('wisata.id_wisata, wisata.nama_wisata, wisata.img_thumbnail')
            ->join('wisata', 'wisata.id_wisata = paket_wisata.id_wisata', 'inner')
            ->where('paket_wisata.id_paket', $id)
            ->get()->getResultArray();
    }
}