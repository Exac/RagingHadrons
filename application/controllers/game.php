<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {
	
	public function index() #/game/
	{
		$this->name();
	}
	
	public function name($game_name = "starcraft2") #/game/starcraft2
	{
		$data['game_name'] = $game_name;
		
		$this->load->view('v_temp_head');
		$this->load->view('v_game', $data);
		$this->load->view('v_temp_foot');
	}
	
}

/* End of file game.php */
/* Location: ./application/controllers/game.php */