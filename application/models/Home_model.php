<?php
class Home_model extends CI_Model
{
	function get_data($table_name)
	{
		//$query=array();
		//for ($id=1; $id<=3 ;$id++)
		//{
		$query = $this->db->get_where($table_name,array('active'=>'yes'))->result();
		//}
		return $query; //array($query->id,$query->user_name,$query->email,$query->password,$query->prof_pic);
	}

	public function get_details($table_name, $id){
		$query = $this->db->get_where($table_name, array('id' => $id,'active'=>'yes'))->result();
		return $query;
	}

	public function insert_contact($data)
    {
        $this->db->insert('visitor_contacts', $data);
		return true;
    }
		
	public function insert_sales($data)
        {

            $this->db->insert('sales', $data);
			return true;

        }
	function get_dataToSales()    //function to get sales_options
	{
		$query=array();
		
		$query = $this->db->get('sales_options');
	
		return $query->result();
	}
		

		


		
}
?>
