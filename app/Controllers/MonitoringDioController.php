<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class MonitoringDioController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function input_output()
  {
    $builder = $this->db->table('di_status');
    $builder->select('*');
    $builder->join('config_di', 'config_di.id = di_status.id', 'left');
    $data['di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $builder->join('lvd_status', 'lvd_status.id = config_lvd.id', 'left');
    $data['lvd'] = $builder->get()->getResult();
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
    return view('dashboard-io', $data);
  }

}
