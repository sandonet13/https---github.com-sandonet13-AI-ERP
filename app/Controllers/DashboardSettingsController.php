<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class DashboardSettingsController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function ajax_lvd()
  {
    $builder = $this->db->table('site_info');
    $builder->select('*');
    $data['site_info'] = $builder->get()->getResult();
    $builder = $this->db->table('config_di');
    $builder->select('*');
    $data['config_di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $data['config_lvd'] = $builder->get()->getResult();
    $builder = $this->db->table('network');
    $builder->select('*');
    $data['network'] = $builder->get()->getResult();
    $data['ip_real'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $2}'");
    $data['netmask'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $4}'");
    $data['gateway'] = shell_exec("ip r | grep ^def | awk '{print $3}'");
    
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('config_measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['config_load'] = $builder->get()->getResult();

    return view('ajax/a-settings-lvd', $data);
  }

  public function ajax_io()
  {
    $builder = $this->db->table('site_info');
    $builder->select('*');
    $data['site_info'] = $builder->get()->getResult();
    $builder = $this->db->table('config_di');
    $builder->select('*');
    $data['config_di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $data['config_lvd'] = $builder->get()->getResult();
    $builder = $this->db->table('network');
    $builder->select('*');
    $data['network'] = $builder->get()->getResult();
    $data['ip_real'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $2}'");
    $data['netmask'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $4}'");
    $data['gateway'] = shell_exec("ip r | grep ^def | awk '{print $3}'");
    
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('config_measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['config_load'] = $builder->get()->getResult();

    return view('ajax/a-settings-io', $data);
  }

  public function ajax_calibration()
  {
    $builder = $this->db->table('site_info');
    $builder->select('*');
    $data['site_info'] = $builder->get()->getResult();
    $builder = $this->db->table('config_di');
    $builder->select('*');
    $data['config_di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $data['config_lvd'] = $builder->get()->getResult();
    $builder = $this->db->table('network');
    $builder->select('*');
    $data['network'] = $builder->get()->getResult();
    $data['ip_real'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $2}'");
    $data['netmask'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $4}'");
    $data['gateway'] = shell_exec("ip r | grep ^def | awk '{print $3}'");
    
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('config_measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['config_load'] = $builder->get()->getResult();

    return view('ajax/a-settings-calibration', $data);
  }

  public function ajax_voltage_calibration()
  {
    $builder = $this->db->table('site_info');
    $builder->select('*');
    $data['site_info'] = $builder->get()->getResult();
    $builder = $this->db->table('config_di');
    $builder->select('*');
    $data['config_di'] = $builder->get()->getResult();
    $builder = $this->db->table('config_lvd');
    $builder->select('*');
    $data['config_lvd'] = $builder->get()->getResult();
    $builder = $this->db->table('network');
    $builder->select('*');
    $data['network'] = $builder->get()->getResult();
    $data['ip_real'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $2}'");
    $data['netmask'] = shell_exec("ifconfig eth0 | grep 'inet ' | awk '{print $4}'");
    $data['gateway'] = shell_exec("ip r | grep ^def | awk '{print $3}'");
    
    $builder = $this->db->table('measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['load'] = $builder->get()->getResult();
    $builder = $this->db->table('config_measurement');
    $builder->select('*');
    $id = [1,4,5];
    $builder->whereIn('id', $id);
    $data['config_load'] = $builder->get()->getResult();

    return view('ajax/a-settings-voltage-calibration', $data);
  }

  public function ajax_get_time(){

		date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;

    return view('ajax/a-dtime', $data);


	}

}
