<?php

namespace App;

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;

class TestOrder extends CIUnitTestCase
{
    use DatabaseTestTrait, FeatureTestTrait;

    public function testIndex(){
        $result = $this->get('api/order');

        $result->assertOk();
        $this->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            ["id_order"=> "1",
            "id_user"=> "221",
            "asal_instansi"=> "SDN Wanasari 12",
            "id_paket"=> "1",
            "durasi"=> "80",
            "peserta"=> "120",
            "id_penginapan"=> "1",
            "id_transportasi"=> "1",
            "jadwal"=> "2021-12-25 05:59:09",
            "total_harga"=> "7000000",
            "status"=> "booked",
            "created_at"=> "2021-12-18 06:06:28"
            ],
            ["id_order"=> "2",
            "id_user"=> "221",
            "asal_instansi"=> "UPI PWK",
            "id_paket"=> "1",
            "durasi"=> "100",
            "peserta"=> "100",
            "id_penginapan"=> "1",
            "id_transportasi"=> "1",
            "jadwal"=> "2021-12-30 06:29:38",
            "total_harga"=> "6500000",
            "status"=> "booked",
            "created_at"=> "2021-12-18 06:30:26"
            ]
        ]);
    }

    public function testShowIdError(){
        $result = $this->get('/api/order/3');

        $result->assertStatus(404);
        $this->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            "status"=> 404,
            "error"=> 404,
            "messages"=> [
                "error"=> "No Data Found with id 3"
            ]
        ]);
    }

    public function testShowId(){
        $result = $this->get('/api/order/1');

        $result->assertOk();
        $this->assertTrue($result->getJSON() !== false);
        $result->assertJSONFragment([
            "full_name"=> "Robby Akbar",
            "phone_number"=> "089666549850",
            "asal_instansi"=> "SDN Wanasari 12",
            "nama_paket"=> "Paket 4P Yogyakarta",
            "durasi"=> "3 Hari 4 Malam",
            "peserta"=> "120",
            "nama_tempat"=> "The Victoria",
            "nama_transportasi"=> "Karina",
            "jadwal"=> "2021-12-25 05:59:09",
            "total_harga"=> "7000000"
        ]);
    }

}