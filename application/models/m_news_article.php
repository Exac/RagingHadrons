<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news_article extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		//connect to database
	}
	
	public function test($test)
	{
		return "<h1>{$test}</h1>";
	}
}

?>