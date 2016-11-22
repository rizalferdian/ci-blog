<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function index()
  {
    $this->template->view('blog/index');
  }
  
  public function detail()
  {
    $this->template->view('blog/detail');
  }
}
?>