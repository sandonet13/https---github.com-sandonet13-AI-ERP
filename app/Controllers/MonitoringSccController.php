<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class MonitoringSccController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function scc1()
  {
    $builder = $this->db->table('monitoring_outback1');
    $builder->select('*');
    $data['scc1'] = $builder->get()->getResult();
    $builder = $this->db->table('monitoring_outback2');
    $builder->select('*');
    $data['scc2'] = $builder->get()->getResult();
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
    return view('dashboard-scc-1', $data);
  }

  public function ajax_scc1()
  {
    $builder = $this->db->table('monitoring_outback1');
    $builder->select('*');
    $data['scc1'] = $builder->get()->getResult();
    $builder = $this->db->table('monitoring_outback2');
    $builder->select('*');
    $data['scc2'] = $builder->get()->getResult();
    return view('ajax/a-dashboard-scc-1', $data);
  }

  public function get_data_scc1()
  {
		$builder = $this->db->table('monitoring_outback1');
    $builder->select('*');
    $data['data_scc1_json'] = $builder->get()->getResult();
		$data_query = json_encode($data['data_scc1_json']);
		echo $data_query;
	}

  public function chart_scc_1()
  {
      $builder = $this->db->table('monitoring_outback1');
      $builder->select('value');
      $data['ds1'] = $builder->getWhere(['name' => 'Voltage Input'])->getResult();
      $data['ds2'] = $builder->getWhere(['name' => 'Voltage OUT'])->getResult();
      $data['ds3'] = $builder->getWhere(['name' => 'Current IN'])->getResult();
      $data['ds4'] = $builder->getWhere(['name' => 'Current OUT'])->getResult();
      $data['ds5'] = $builder->getWhere(['name' => 'AH'])->getResult();
      $data['ds6'] = $builder->getWhere(['name' => 'kWH'])->getResult();
      $data['ds7'] = $builder->getWhere(['name' => 'Max Voc'])->getResult();
      $data['ds8'] = $builder->getWhere(['name' => 'AH Total'])->getResult();
      $data['ds9'] = $builder->getWhere(['name' => 'kWH Total'])->getResult();

      return view('dashboard-scc-1', $data);
  }

}
