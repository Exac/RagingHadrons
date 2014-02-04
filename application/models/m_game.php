<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_game extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_game_css($game_name)
	{
		switch ($game_name) {
			case ($game_name == str_replace(' ', '', "Starcraft2")):
				return "";/*sc2 css */
				break;
			case ($game_name == str_replace(' ', '', "Dota2")):
				return "";/*dota2 css */
				break;
			case ($game_name == str_replace(' ', '', "Battlefield4")):
				return "";/*bf4 css */
				break;
			case ($game_name == str_replace(' ', '', "LOL")):
				return "";/*lol css */
				break;
			case ($game_name == str_replace(' ', '', "Wildstar")):
				return "";/*ws css */
				break;
			case ($game_name == str_replace(' ', '', "StarCitizen")):
				return "";/*ss css */
				break;
		}
	}

}

?>