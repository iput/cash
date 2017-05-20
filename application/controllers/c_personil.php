<?php 
defined('BASEPATH')OR exit('No direct scripts access allowed'); 
/**
* 
*/
class C_personil extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('adm_personil');
    
	}

	public function index()
	{
		$data['stat1']="";
		$data['stat2']="active";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$datax = $this->adm_personil->get_all_personil();
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_personil', array('data_in' => $datax));
		$this->load->view('attribute/footer');
	}
	//Random Password
	public function random_pass($panjang){
		$karakter = 'PettY12345';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
	}
	//Random Username
	public function random_user($panjang){
		$huruf='12345';
		$string = '';
		for ($i = 0; $i< $panjang; $i++){
			$pos = rand(0, strlen($huruf)-1);
			$string .= $huruf{$pos};
		}
		return $string;
	}
	//Tambah data personil
	public function add_personil(){
		$namaUser = $this->input->post('txt_nama_personil');
		$alamat = $this->input->post('txt_alamat');
		$nohp = $this->input->post('txt_nohp');
		$email = $this->input->post('txt_email');
		$hsl = (explode (" ", $namaUser));
		if (count($hsl) != 0){
		$karakter = $hsl[0];
		}
		else{
		$karakter = $namaUser;	
		}		
		$username = $karakter.$this->random_user(2);
		$password = $this->random_pass(8);
		$status = 'belum verifikasi';
		$aktif = 'offline';
		$config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_user' => 'gangsantri26@gmail.com', // change it to yours
                'smtp_pass' => 'jelajah123', // change it to yours
                'mailtype' => 'html',
                'mailpath' =>'/usr/sbin/sendmail',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
		$message = '<b>Pendaftaran akun Petty Cash</b><br/>'
                    . '<b>Email : </b>' . $email . '<br/>'
                    . '<b>Username : </b>' . $username . '<br/>'
                    . '<b>Password : </b>' . $password . '<br/>'
                    . '<a href="' . base_url() . '">Klik Link Ini untuk Verifikasi Akun Anda</a>';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('gangsantri26@gmail.com'); // change it to yours
        $this->email->to($email); // change it to yours
        $this->email->subject('Verifikasi Akun Petty Cash');
        $this->email->message($message);
        if ($this->email->send()) {
        	$field = array(
                    'nama_user' => $namaUser,
                    'alamat' => $alamat,
                    'no_hp' => $nohp,
                    'email' => $email,
                    'username' => $username,
                    'password' => md5($password),                 
                    'status'=>$status,
                    'last_login' => null,
                    'is_active' => $aktif
            );
            $result = $this->adm_personil->add_personil('user', $field);
            $msg['success'] = FALSE;
            if ($result) {
                $this->session->set_flashdata('msg', '&nbsp;<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Baru Berhasil Ditambahkan');
                $msg['success'] = TRUE;
                redirect('C_personil/index');
                }
            }
            else {
           	show_error($this->email->print_debugger());
            $this->session->set_flashdata('msg', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Gagal Disimpan');	
            } 
	}
	//get personil berdasarkan id
	public function get_personil() {
    	$id = $this->input->get('id');
        $data = $this->adm_personil->get_personil($id);
        echo json_encode($data);
    }
    //update data personil 
    public function update_personil(){
    	$id = $this->input->post('edit_iduser');
        $field = array(
            'nama_user' => $this->input->post('edit_nama'),
            'alamat' => $this->input->post('edit_alamat'),
            'no_hp' => $this->input->post('edit_nohp'),
            'email' => $this->input->post('edit_email')
        );
        $result = $this->adm_personil->update_personil('user', $field, $id);
        if ($result>=0) {
        	redirect('C_personil/index');
        }else{
        	redirect('C_personil/index');
        }	
    }

    //delete data personil
    public function delete_personil($id){
    	$result = $this->adm_personil->delete_personil($id);
        if ($result>= 1) {
            redirect('C_personil/index');
        }
    }

    //non email

    public function add_user(){
        $namaUser = $this->input->post('txt_nama_personil');
        $alamat = $this->input->post('txt_alamat');
        $nohp = $this->input->post('txt_nohp');
        $email = $this->input->post('txt_email');
        $username = $this->random_user(5);
        $password = $this->random_pass(8);
        $status = 'belum verifikasi';
        $aktif = 'offline';
        $field = array(
                    'nama_user' => $namaUser,
                    'alamat' => $alamat. ' '.$password,
                    'no_hp' => $nohp,
                    'email' => $email,
                    'username' => $username,
                    'password' => md5($password),                 
                    'status'=>$status,
                    'last_login' => null,
                    'is_active' => $aktif
            );
            $result = $this->adm_personil->add_personil('user', $field);
            $msg['success'] = FALSE;
            if ($result) {
               
                $msg['success'] = TRUE;
                redirect('C_personil/index');
                }
              
    }
}