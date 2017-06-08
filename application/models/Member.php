<?php
	Class Member extends CI_Model
	{

		function getMemberInfo($id){
	 	 	$this->db->select('*');
	    $this->db->from('TblMember');
	    $this->db->where('Mem_ID',$id);
	    return $this->db->get()->row();
		}

		function getUserdata($email){
			$this->db->select('*');
			$this->db->from('TblMember');
	    $this->db->where('Member_Email',$email);
	    return $this->db->get()->row();
		}

		function getUserList($userlevel, $useremail){
			$this->db->select('*');
			$this->db->from('TblMember');
			if($userlevel > 2){
				$this->db->where('Member_Email', $useremail);
			}
	    return $this->db->get()->result();
		}
	}
?>
