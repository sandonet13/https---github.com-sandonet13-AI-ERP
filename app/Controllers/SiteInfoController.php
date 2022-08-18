<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
use App\Models\SiteInfoModel;

class SiteInfoController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function site_info()
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
    $session = session();
    $name = $session->get('user_name');
    $email = $session->get('email');
    $data['name'] = $name;
    $data['email'] = $email;
    date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
    return view('dashboard-settings', $data);
  }

  


  public function reboot()
  {
    shell_exec(" reboot -h now ");
    return view('dashboard-settings');
  }


  public function save_network()
    {

      $site_id = $this->request->getVar('site_id');
      $name = $this->request->getVar('name');
      $address = $this->request->getVar('address');
      $ipaddress = $this->request->getVar('ipaddress');
      $netmask = $this->request->getVar('netmask');
      $gateway = $this->request->getVar('gateway');
      $mode = $this->request->getVar('mode');
      $ip_server = $this->request->getVar('ip_server');
      $snmp1 = $this->request->getVar('snmp1');
      $trap_enable = $this->request->getVar('trap_enable');
      // $new_date = date("d M Y", strtotime($date));
      $char = '"';

      $data = [  
        'site_id' => $site_id,
        'name'  => $name,
        'address'  => $address,
      ];

      $data_network = [  
        'ipaddress' => $ipaddress,
        'netmask'  => $netmask,
        'gateway'  => $gateway,
      ];

      $builder = $this->db->table('site_info');
      $builder->where('id', 1);
      $builder->update($data);

      $builder = $this->db->table('network');
      $builder->where('id', 1);
      $builder->update($data_network);

      shell_exec(" echo > /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'source /etc/network/interfaces.d/*' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '# Network is managed by Network manager' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'auto lo' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'iface lo inet loopback' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");

      shell_exec("echo 'auto eth0' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'allow-hotplug eth0' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'iface eth0 inet static' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '  address $ipaddress' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '  netmask $netmask' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '  gateway $gateway' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");


      shell_exec("echo 'auto eth0:0' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'allow-hotplug eth0:0' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo 'iface eth0:0 inet static' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '  address 192.168.1.100' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '  netmask 255.255.255.0' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("echo '' >> /var/www/rddspm/interfaces_temp ");
      shell_exec("cp /var/www/rddspm/interfaces_temp /etc/network/interfaces ");


      return $this->response->redirect(site_url('/dashboard-settings'));
      // $localIP = shell_exec("/sbin/ifconfig eth0| grep 'inet addr:'");
      // echo $localIP;
    }

}
