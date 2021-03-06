<?php
Class Charmodel extends CI_Model {
	
	function list_online() {
		$this->db_ragnarok->select('char.char_id,char.account_id,char.char_num,char.name,char.class,char.base_level,char.job_level,char.zeny,char.last_map,char.last_x,char.last_y,char.job_level,char.guild_id AS char_guid,char.online,guild.guild_id,guild.name AS guild_name');
		$this->db_ragnarok->from('char')->order_by('char.char_id','asc');
		$this->db_ragnarok->where('char.online', '1');
		$this->db_ragnarok->join('guild', 'char.guild_id = guild.guild_id', 'left');
		$query = $this->db_ragnarok->get();
		return $query->result_array();
	}
	
	function get_char_info($cid) {
		$this->db_ragnarok->select('char.*,guild.guild_id,guild.name AS guild_name,party.party_id,party.name AS party_name');
		$this->db_ragnarok->from('char');
		$this->db_ragnarok->where('char.char_id', $cid);
		$this->db_ragnarok->join('guild', 'char.guild_id = guild.guild_id', 'left');
		$this->db_ragnarok->join('party', 'char.party_id = party.party_id', 'left');
		$query = $this->db_ragnarok->get();
		return $query->row();
	}
}