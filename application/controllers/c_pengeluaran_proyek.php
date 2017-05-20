<?php 
defined('BASEPATH')OR exit('No direct script access allowed');
/**
* 
*/
class C_pengeluaran_proyek extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('adm_personil');
		$this->load->model('adm_pengeluaran');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
 		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="active";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$data['user'] = $this->adm_personil->get_all_personil();
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_pproyek');
		$this->load->view('attribute/footer');		
	}

	public function get_combo(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

		if($modul == "project"){
			
			echo $this->adm_pengeluaran->get_project($id);
		}
		else if ($modul == "anggaran"){
			echo $this->adm_pengeluaran->get_anggaran($id);
		}
	}

	public function add_pengeluaran(){
		$sisa="";
 		$id_anggaran = $this->input->post('cb_anggaran');
        $jumlah1 = $this->input->post('txtJumlah');
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
                    "id_user" =>$this->input->post('cb_user')
                    );
                $sisa_anggaran = $this->adm_pengeluaran->get_sisa_anggaran($id_anggaran);
                foreach($sisa_anggaran as $s){
                    $sisa = $s['sisa_anggaran'];
                }
                $hasil = $sisa - $jumlah_pengeluaran;

                $sisa_update = array(
                    "sisa_anggaran" => $hasil
                    );
                $result = $this->adm_pengeluaran->add_pengeluaran('pengeluaran_project', $data);
                if ($result){
                    $this->adm_pengeluaran->update_anggaran('anggaran_pengeluaran', $sisa_update, $id_anggaran);
                unset($data);
                unset($jumlah1);
                unset($jumlah2);
                redirect('C_pengeluaran_proyek');    
                }
              
                
            }
	}
	
}