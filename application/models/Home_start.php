<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_start extends CI_Model{
	function start_category(){
		return $this->db->get('categories');
	}
}
?>