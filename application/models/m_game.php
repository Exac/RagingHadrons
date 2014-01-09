<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_game extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get_game_css($game_name)
	{
		if($game_name == "starcraft2")
		{
			return "/*sc2 css */";
		}
	}

}

?>