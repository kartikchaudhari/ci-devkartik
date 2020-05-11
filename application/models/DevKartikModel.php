<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DevKartikModel extends CI_Model {
	public function pull_professional_details(){
		$query = $this->db->get('dev_prof_details');
		return $query->result_array()[0];
	}

	public function pull_attachments(){
		$query = $this->db->get('dev_attachments');
		return $query->result_array()[0];
	}

	public function pull_social_profiles(){
		$query = $this->db->get('dev_social_profiles');
		return $query->result_array()[0];	
	}


}

/* End of file DevKartikModel.php */
/* Location: ./application/models/DevKartikModel.php */
?>