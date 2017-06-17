<?php if(!defined('BASEPATH')) exit('Tidak boleh ngakses langsung mas bro !');
/**
 * Description of My_template
 *
 * @author wahyu widodo
 */
class My_template {
	
	var $template_data = array();
	
	public function __construct(){
		$this->ci = & get_instance();			
	}	
	
	public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

	public function loadHome($view_name = '' , $view_data = array(), $return = FALSE){
		$this->set('contents', $this->ci->load->view($view_name, $view_data, TRUE));		
		$this->ci->load->view('layout_home',$this->template_data, $return);
	}	
	

}

?>