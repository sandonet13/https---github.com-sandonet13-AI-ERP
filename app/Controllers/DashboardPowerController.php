<?php

namespace App\Controllers;
// use App\Controllers\BaseController;

class DashboardSccController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }
    public function dashboard()
    {
        $builder = $this->db->table('config_measurement');
        $builder->select('*');
        $data['ds1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
        $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
        $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
        $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
        return view('/index', $data);
    }

    public function dashboard1()
    {
        $builder = $this->db->table('measurement');
        $builder->select('*');
        $builder->join('measurement', 'config_measurement.id = measurement.id');
        $data['ds1_1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
        $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
        $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
        $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
        return view('/index', $data);
    }
}
