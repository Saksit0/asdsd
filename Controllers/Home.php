<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('index');
    }

    public function get_data_ajax() {
        $data = [
            (object)["food_id"=>1, "food_name"=> "ข้าวมันไก่"],
            (object)["food_id"=>2, "food_name"=> "ก๋วยเตี๋ยว"],
        ];
        sleep(5);
        return json_encode($data);
    }
}
