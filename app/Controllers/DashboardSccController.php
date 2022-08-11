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
        $builder = $this->db->table('monitoring_outback1');
        $builder->select('*');
        $data['ds1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
        $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
        $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
        $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
        return view('/index', $data);
    }

    // public function dashboard1()
    // {
    //     $builder = $this->db->table('monitoring_bms1');
    //     $builder->select('*');
    //     $builder->join('monitoring_bms1', 'config_bms_param.id = monitoring_bms1.id');
    //     $data['ds1_1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
    //     $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
    //     $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
    //     $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
    //     return view('/index', $data);
    // }

    // public function ajax_dashboard_scc()
    // {
    //     $builder = $this->db->table('monitoring_outback1');
    //     $builder->select('*');
    //     $data['ds1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
    //     $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
    //     $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
    //     $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
    //     return view('ajax/a-dashboard-scc-1', $data);

    // }

    public function ajax_scc1()
    {
      $builder = $this->db->table('monitoring_outback1');
      $builder->select('*');
      $data['scc1'] = $builder->get()->getResult();
      return view('ajax/a-dashboard-scc-1', $data);
    }

    public function ajax_scc2()
    {
      $builder = $this->db->table('monitoring_outback2');
      $builder->select('*');
      $data['scc2'] = $builder->get()->getResult();
      return view('ajax/a-dashboard-scc-2', $data);
    }
}
