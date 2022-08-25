<?php

namespace App\Controllers;
require_once APPPATH.'/ThirdParty/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;

//======================================================
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\CellAlignment;
use Box\Spout\Common\Entity\Style\Color;
//===========================================================
use App\Models\DataLogModel;
// use App\Controllers\BaseController;

class MonitoringLogController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->orderBy('id', 'desc');
        $builder->limit(200);
        $session = session();
        $name = $session->get('user_name');
        $email = $session->get('email');
        $data['name'] = $name;
        $data['email'] = $email;
        $data['log'] = $builder->get()->getResult();
        date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
        $data['data_range'] = $builder->get()->getResult();

        $dataLogModel = new DataLogModel();
        // $data = $this->data;
        $from = $this->request->getVar('from');
        $to = $this->request->getVar('to');
        $show = $this->request->getVar('show');
        //$download = $this->input->post('download');

        $data['subpage'] = 'DataLog';

        $id = 2;
        if (!empty($show)) {
            //echo $show;
            if (empty($from) || empty($to)) {
                // echo 'kosong';
                $dt = new \DateTime(date('y-m-d H:i:s'));
                $to1 = $dt->format('Y-m-d H:i:s');
                $dt->modify("-1 hour");
                $from1 = $dt->format('Y-m-d H:i:s');
                //$data['ai'] = $this->datalog_model->datalog($from1, $to1);
                $data['data_range'] = $dataLogModel->hour_datalog($from, $to);
            } else {
                //echo 'show data';
                if ($to < $from) {
                    //echo 'salah waktu';
                    $data['info'] = 'Wrong Date Picker';
                    //$data['ai'] = $this->datalog_model->log_ai_all();
                    $data['data_range'] = $dataLogModel->datalog($from, $to);
                } else {
                    //echo 'showdata date :from-to ';
                    $data['data_range'] = $dataLogModel->datalog($from, $to);
                }
            };
        } else {
            //echo 'show kosong';
            $dt = new \DateTime(date('y-m-d H:i:s'));
            $to1 = $dt->format('Y-m-d H:i:s');
            $dt->modify("-1 hour");
            $from1 = $dt->format('Y-m-d H:i:s');
            //$data['ai'] = $this->datalog_model->datalog($from1, $to1);
            $data['data_range'] = $dataLogModel->hour_datalog($from, $to);
        }
        return view('dashboard-log', $data);
    }


    public function log()
    {
        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->orderBy('id', 'desc');
        $builder->limit(200);
        $session = session();
        $name = $session->get('user_name');
        $email = $session->get('email');
        $data['name'] = $name;
        $data['email'] = $email;
        $data['log'] = $builder->get()->getResult();
        date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
        return view('dashboard-log', $data);
    }

    public function datalog($from, $to){

        $builder = $this->db->table('data_log');
        $builder->select('*');
        $builder->where('dtime >=', $from);
        $builder->where('dtime <=', $to);
        $builder->orderBy('id', 'desc');
        $builder->limit(1000);
        $session = session();
        $name = $session->get('user_name');
        $email = $session->get('email');
        $data['name'] = $name;
        $data['email'] = $email;
        $data['log'] = $builder->get()->getResult();
        date_default_timezone_set('Asia/Jakarta');
		$date = date('d/m/Y H:i:s', time());
		$data['dtime'] = $date;
        $data['data_range'] = $builder->get()->getResult();
        return view('dashboard-log', $data);
    }

    public function DownloadToExcel(){
        $from = $this->request->getVar('start');
        $to = $this->request->getVar('end');
        $dataLogModel = new DataLogModel();
        $logs = $dataLogModel->datalog($from, $to);
        $builder = $this->db->table('site_info');
        $builder->select('*');
        $data['site_info'] = $builder->get()->getResult();

        $writer = WriterFactory::create(Type::XLSX);
        $writer->openToBrowser('Log_Data_log.xlsx');
        // echo $logs[0];


        $writer->addRows(array(0=>array('SITE ID',':',$data['site_info'][0]->site_id)));
        $writer->addRows(array(0=>array('SITE NAME',':',$data['site_info'][0]->name)));
        $writer->addRows(array(0=>array('SITE ADDRESS',':',$data['site_info'][0]->address)));
        $writer->addRows(array(0=>array('MODEL',':',$data['site_info'][0]->model)));
        $writer->addRows(array(0=>array('PERIODE',':',$start.'-'.$end)));

        $empty = [''];
        $empty2 = [''];
        $writer->addRow($empty);
        $writer->addRow($empty2);

        $header = [
            'No.',
            'Date/Time',
            'Bus (V)',
            'BTS (V)',
            'MW/VSAT (V)',
            'BTS (A)',
            'MW/VSAT (A)'
        ];

        $writer->addRow($header);

        $i = 1;
        foreach($logs as $content){
        $rows = [
            [
                $i++,
                $content->dtime,
                $content->bus_vol,
                $content->bts_vol,
                $content->vsat_vol,
                $content->bts_cur,
                $content->vsat_cur
            ]
            ];
    //     echo json_encode($rows);

        $writer->addRows($rows);
    }
    $writer->close();

}
}