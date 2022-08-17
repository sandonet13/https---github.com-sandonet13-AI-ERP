<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use App\Models\MonitoringBmsModel;

class MonitoringBmsController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
  }
  public function bms1()
  {
    $builder = $this->db->table('config_bms_param');
    $builder->select('*');
    $builder->join('monitoring_bms1', 'config_bms_param.id = monitoring_bms1.id');
    $data['data'] = $builder->get()->getResult();
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    return view('dashboard-bms', $data);
      // . view('ajax/a-dashboard-bms', $data);
  }

  public function ajax_bms1()
  {
    $builder = $this->db->table('config_bms_param');
    $builder->select('*');
    $builder->join('monitoring_bms1', 'config_bms_param.id = monitoring_bms1.id');
    $data['data'] = $builder->get()->getResult();
    return view('ajax/a-dashboard-bms', $data);
  }
}
