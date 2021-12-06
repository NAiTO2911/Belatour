<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BannerModel extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id_banner';
    protected $allowedFields = ['title','description', 'img_banner'];
}