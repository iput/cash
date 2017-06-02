<?php defined('BASEPATH')OR exit('akses di tolak pada halaman ini');
/**
 *
 */
class User_aset extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('User_m','aset');
  }

  public function index()
  {
    $data['debit'] = $this->aset->getAllDebit();
    $data['kredit']= $this->aset->getAllKredit();
    $this->load->view('attribute/header_user');
    $this->load->view('user/aset', $data);
    $this->load->view('attribute/footer_user');
  }

  public function insertDebit()
  {
    $datain = array(
      "id_user"=>"1",
      "tanggal"=>$this->input->post('tglDebit'),
      "kredit"=>"0",
      "debit"=>$this->input->post('pemasukan'),
      "keterangan"=>$this->input->post('keterangan'));
    $result = $this->aset->insertDebit($datain);
    if ($result) {
      $this->session->set_flashdata('sukses','Data Pemasukan Berhasil dimasukan');
      redirect('user_aset');
    }else{
      $this->session->set_flashdata('gagal','Terjadi kesalahan pada proses input data');
      redirect('user_aset');
    }
  }

  public function editDebit()
  {
    $id = $this->input->get('id');
    $data = $this->aset->getCurrentDebit($id);
    echo json_encode($data);
  }

  public function deleteDebit($id)
  {
    $data = $this->aset->deleteDebit($id);
    if ($data) {
      $this->session->set_flashdata('hapus','Data Berhasil Dihapus');
      redirect('user_aset');
    }else{
      $this->session->set_flashdata('gagal','terjadi kesalahan pada proses penghapusan');
      redirect('user_aset');
    }
  }

  public function insertKredit()
  {
    $data = array(
      "tanggal"=>$this->input->post('tglKredit'),
      "kredit"=>$this->input->post('jumlahKredit'),
      "debit"=>"0",
      "keterangan"=>$this->input->post('ketKredit'),
      "id_user"=>"1");
    $result = $this->aset->insertKredit($data);
    if ($result) {
      $this->session->set_flashdata('sukses','Data Pengeluaran berhasil ditambahkan');
      redirect('user_aset');
    }else{
      $this->session->set_flashdata('gagal','data pengeluaran pribadi tidak bisa dimasukan');
      redirect('user_aset');
    }
  }

  public function deleteKredit($id)
  {
    $result = $this->aset->deleteKredit($id);
    if ($result) {
      $this->session->set_flashdata('hapus','data pengeluaran pribadi telah dihapus');
      redirect('user_aset');
    }else{
      $this->session->set_flashdata('gagal','terjadi kesalahan pada proses penghapusan data pengeluaran pribadi');
      redirect('user_aset');
    }
  }
}
 ?>
