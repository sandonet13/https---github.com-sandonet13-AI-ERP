<?php

namespace App\Controllers;
// use App\Controllers\BaseController;
//use App\Models\DashboardModel as DashboardModel;

class DataLogController extends BaseController
{
  private $db;

  public function __construct()
  {
    $this->db = db_connect(); // Loading database
    // OR $this->db = \Config\Database::connect();
    //$this->dashboardModel = new DashboardModel();
  }

  public function export_csv_24()
  {
		$builder = $this->db->table('data_log');
    $data_log = $builder->select('id,dtime,bus_vol,bts_vol,vsat_vol,bts_cur,vsat_cur')
            ->where('dtime > now() - interval 24 hour')
            ->get()->getResultArray();
    //$data_log_parsing = json_encode($data_log);
    $filename = 'Last_24_Hours '.date('Y-m-d').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
        $headers = ["ID", "Date Time", "Bus (V)", "BTS (V)","VSAT (V)", "BTS (A)", "VSAT (A)"];
        $handle = fopen('php://output', 'w');
        //print_r($data_log);
        fputcsv($handle, $headers);

            foreach ($data_log as $data_array) {
                fputcsv($handle, $data_array);
            }
                fclose($handle);
            exit;
          }
    //print_r($data_log);
}
