<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class DashboardDashController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }


  public function ajax_main_dashboard_pv()
  {
    $builder = $this->db->table('power_batt');
    $builder->select('*');
    $data['batt'] = $builder->get()->getResult();
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('power_pv');
    $builder->select('*');
    $builder->where('id !=', 3);
    $builder->where('id !=', 4);
    $data['power'] = $builder->get()->getResult();
    return view('ajax/a-dashboard-pv-power', $data);
  }

  public function ajax_main_dashboard_batt()
  {
    $builder = $this->db->table('power_batt');
    $builder->select('*');
    $data['batt'] = $builder->get()->getResult();
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('power_pv');
    $builder->select('*');
    $builder->where('id !=', 3);
    $builder->where('id !=', 4);
    $data['power'] = $builder->get()->getResult();
    return view('ajax/a-dashboard-batt-power', $data);
  }

  public function ajax_main_dashboard_load()
  {
    $builder = $this->db->table('power_batt');
    $builder->select('*');
    $data['batt'] = $builder->get()->getResult();
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('power_pv');
    $builder->select('*');
    $builder->where('id !=', 3);
    $builder->where('id !=', 4);
    $data['power'] = $builder->get()->getResult();
    return view('ajax/a-dashboard-load-power', $data);
  }

}
