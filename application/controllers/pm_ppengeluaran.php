<?php defined('BASEPATH')OR  exit('tidak ada akses');
/**
 * 
 */
 class Pm_ppengeluaran extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('prm_pengeluaran');
 		$this->load->library('upload');
        date_default_timezone_set("Asia/Jakarta");

 	}

 	public function index()
 	{
 		// $idUser=$this->session->userdata('idUser');
 		$data['nm_project'] = $this->prm_pengeluaran->get_nm_project(1);
        $data['all_pengeluaran'] = $this->prm_pengeluaran->getAllPengeluaran();
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_pproyek', $data);
 		$this->load->view('attribute/footer_pm'); 		
 	}

 	public function get_anggaran(){
 		$modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "anggaran") {
            echo $this->prm_pengeluaran->get_nm_anggaran($id);
        }
 	}

 	public function add_pengeluaran(){
 		$sisa="";
 		$id_anggaran = $this->input->post('nama_anggaran');
        $jumlah1 = $this->input->post('jumlah_pengeluaran');
        $jumlah2 = str_replace("Rp. ", "", $jumlah1);
        $jumlah_pengeluaran = str_replace(".", "", $jumlah2);
 		$config['upload_path'] = './upload/';
        $config['allowed_types'] = 'bmp|jpg|png|jpeg|pdf|docx|xls';
        $config['max_size'] = '3000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('welcome_message', $error);
                
            }
            else {
                $gbr = $this->upload->data();
                $data = array(
                    "id_anggaran_pengeluaran" => $id_anggaran,
                    "nama_pengeluaran" => $this->input->post('nama_pengeluaran'),
                    "jumlah_pengeluaran" => $jumlah_pengeluaran,
                    "waktu_pengeluaran" => date("Y-m-d H:i:s"),
                    "keterangan_pengeluaran" => $this->input->post('ket_pengeluaran'),
                    "bukti_pengeluaran" => $gbr['file_name'],
                    "id_user" =>1
                    );
                $sisa_anggaran = $this->prm_pengeluaran->get_sisa_anggaran($id_anggaran);
                foreach($sisa_anggaran as $s){
                    $sisa = $s['sisa_anggaran'];
                }
                $hasil = $sisa - $jumlah_pengeluaran;

                $sisa_update = array(
                    "sisa_anggaran" => $hasil
                    );
                $result = $this->prm_pengeluaran->add_pengeluaran('pengeluaran_project', $data);
                if ($result){
                    $this->prm_pengeluaran->update_anggaran('anggaran_pengeluaran', $sisa_update, $id_anggaran);
                unset($data);
                unset($jumlah1);
                unset($jumlah2);
                redirect('Pm_ppengeluaran');    
                }
                
            }
 	}

    public function update_pengeluaran(){
        
    }

    public function get_pengeluaran(){
        $id = $this->input->get('id');
        $data = $this->prm_pengeluaran->get_pengeluaran($id);
        echo json_encode($data);
    }



 }