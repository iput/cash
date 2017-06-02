<?php defined('BASEPATH')OR exit('akses di tolak');
/**
 *
 */
class User_proyek extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('attribute/header_user');
    $this->load->view('user/project');
    $this->load->view('attribute/footer_user');
  }
}
 ?>
