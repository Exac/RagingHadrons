<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_maingrid_factory extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function test($test)
	{
		return "<h1>{$test}</h1>";
	}
}

?>