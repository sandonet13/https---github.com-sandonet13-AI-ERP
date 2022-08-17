<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class MonitoringDashController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect();
  }

  public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('user_name');
    }

  public function main_dashboard()
  {
    $session = session();
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
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    return view('dashboard-rectifier', $data);
  }

}
