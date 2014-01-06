<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_u extends CI_Model
{
	public $username, $bio, $avatar, $tag;
	
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function load($username)
	{
		$username = mysql_real_escape_string($username);
		
		$query = $this->db->query("select * from users where username = '{$username}'");
		$row = $query->row();
		
			$this->bio = $row->bio;
			$this->username = $row->username;
			$this->avatar = $row->last_name;
			$this->tag = $row->company;
		
	}

}

?>