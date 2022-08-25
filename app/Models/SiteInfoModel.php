<?php

namespace App\Models;
use CodeIgniter\Model;
class SiteInfoModel extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_site_info(){
        
    }

//     public function save_network($siteid, $name, $address, $ipaddress, $netmask, $gateway, $mode, $ip_server, $snmp1, $trap_enable, $wifi_ssid, $wifi_password)
//     {
//         $data = [
//             'ipaddress'       => $ipaddress,
//             'netmask'         => $netmask,
//             'gateway'         => $gateway,
//             'ip_server'       => $ip_server,
//             'snmp1'           => $snmp1,
//             'trap_enable'     => $trap_enable,
//         ];
//         $this->db->update('network', $data);

//         $data2 = [
//             'site_id' => $siteid,
//             'name'    => $name,
//             'address' => $address
//         ];
//         $this->db->update('site_info', $data2);
//     }
    protected $table = 'site_info';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['site_id', 'name', 'address'];
}