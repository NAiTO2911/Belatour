<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class WisataModel extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $allowedFields = ['nama_wisata','img_thumbnail', 'deskripsi', 'alamat', 'id_kabupaten'];

    public function getWisataByIdKab($id = false)
    {
        return $this->db->table('wisata')
            ->select('nama_wisata, deskripsi, id_kabupaten')
            ->where('id_kabupaten', $id)
            ->get()->getResultArray();
    }
}