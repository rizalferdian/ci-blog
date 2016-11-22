<?php
class Template {

  var $ci;

  function __construct() 
  {
    $this->ci =& get_instance();
  }

  public function view($view, $data = null)
  {
    $template['header'] = $this->ci->load->view('blog/header', $data, true);
    $template['body'] = $this->ci->load->view($view, $data, true);
    $template['sidebar'] = $this->ci->load->view('blog/sidebar', $data, true);
    $template['footer'] = $this->ci->load->view('blog/footer', $data, true);
    $this->ci->load->view('template', $template);
  }

}
?>