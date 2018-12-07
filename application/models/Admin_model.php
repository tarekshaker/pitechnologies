<?php
class Admin_model  extends CI_Model  {

	function __construct()
    {
        parent::__construct();
    }

    function authenticate ( $username , $password )
    {
    	$password = md5 ( $password ) ;
    	$return = $this->db->get_where ( 'tbl_admins' , array (
    			'username' => $username ,
    			'password' => $password,
          'is_active'=>'yes'
    	))->row_array();
    	if (empty ($return ) )
    	{
    		return false ;
    	}else
    	{
    		return $return ;
    	}
    }

    public function active_info_num()
    {
        if( $this->db->query("SELECT * FROM about where is_active = 'yes'")->num_rows() >= 2)
            return false;
        else return true;
    }

}
