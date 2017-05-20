<?php defined('BASEPATH')OR exit('akses tidak diizinkan');
/**
 * 
 */
 class Pm_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_pribadi');
 	}

 	public function index()
 	{
 		$hasil ['debit'] = $this->adm_pribadi->get_all_debit();
		$hasil ['kredit'] = $this->adm_pribadi->get_all_kredit();
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_pPendapatan', $hasil);
 		$this->load->view('attribute/footer_pm'); 		
 	}

 	public function add_pribadi($param){
 		
		if ($param=="debit"){
			$kredit ="0";
			$debit1 = $this->input->post('jumlah_pemasukkan');
			$debit2= str_replace("Rp. ", "", $debit1);
			$debit = str_replace(".","", $debit2);  
			$tanggal = $this->input->post('tgl_pemasukkan');
			$keterangan = $this->input->post('keterangan_pemasukkan');
		}
		else if ($param="kredit"){
			$debit ="0";
			$kredit1 = $this->input->post('jumlah_pengeluaran');
			$kredit2= str_replace("Rp. ", "", $kredit1);
			$kredit = str_replace(".","", $kredit2);
			$tanggal = $this->input->post('tgl_pengeluaran');
			$keterangan = $this->input->post('keterangan_pengeluaran');
		}
		$idUser = $this->session->userdata('idUser');
		$field = array (
			'id_user' =>$idUser,
			'tanggal' =>$tanggal,
			'kredit' =>$kredit,
			'debit' =>$debit,
			'keterangan' => $keterangan
			);
		$result = $this->adm_pribadi->add_pribadi('pengeluaran_pribadi', $field);
		if ($result){
			redirect('pm_pribadi/index');
		}
		else{
			echo "error";
		}
		}

		public function get_pribadi(){
			$id=$this->input->get('id');
			$data = $this->adm_pribadi->get_pribadi($id);
			echo json_encode($data);
		}
//Update
		public function update_pribadi($param){
			$id=$this->input->post('edit_idpribadi');
			if ($param=="debit"){
				$debit1 = $this->input->post('edit_jumlah_pemasukkan');
				$debit2= str_replace("Rp. ", "", $debit1);
				$debit = str_replace(".","", $debit2); 
				$field = array(
					'tanggal' => $this->input->post('edit_tgl_pemasukkan'),
					'debit' => $debit,
					'keterangan' => $this->input->post('edit_keterangan_pemasukkan')
					);
			}
			else if ("kredit"){
				$kredit1 = $this->input->post('edit_jumlah_pengeluaran');
				$kredit2= str_replace("Rp. ", "", $kredit1);
				$kredit = str_replace(".","", $kredit2);
				$field = array(
					'tanggal' => $this->input->post('edit_tgl_pengeluaran'),
					'kredit' => $kredit,
					'keterangan' => $this->input->post('edit_keterangan_pengeluaran')
					);
			}
			else{
				redirect('Welcome');
			}
		$result = $this->adm_pribadi->update_pribadi('pengeluaran_pribadi', $field, $id);
        if ($result>=0) {
        	redirect('pm_pribadi/index');
        }else{
        	redirect('Welcome');
        }	
		
		}

		public function delete_pribadi($id){
			$result = $this->adm_pribadi->delete_pribadi($id);
			if ($result>= 1) {
            redirect('pm_pribadi/index');
        }
		}
 }