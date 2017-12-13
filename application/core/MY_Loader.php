<?php
class MY_Loader extends CI_Loader {

  public function templateAdmin($templateName = '', $vars = array(), $return = FALSE)
  {

    parent::__construct();

    $instance =& get_instance();

    $data = array();
		$instance->load->view('admin/layout/header', $data, $return);
		$instance->load->view($templateName, $vars, $return);
		$instance->load->view('admin/layout/footer', $vars, $return);

  }


  public function template($templateName = '', $vars = array(), $return = FALSE)
  {

    parent::__construct();

    $instance =& get_instance();

    $data = array();
    $content  = $instance->load->view('layout/header', $data, $return);
    $content .= $instance->load->view($templateName, $vars, $return);
    $content .= $instance->load->view('layout/footer', $vars, $return);

    if ($return){
      return $content;
    }

  }

}
