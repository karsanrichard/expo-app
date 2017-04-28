<?php 
class Dashboard_model extends MY_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this =& get_instance();
    }

    public static function get_stands($event_id)
    {
        $ci =& get_instance();
        // $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
    	$stands = $ci->db->get_where('stand', array('event_id' => $event_id))->result_array();

        return $stands;
    }

    public static function get_event_booking_data($event_id = NULL, $stand_id = NULL)
    {
        $ci =& get_instance();
        $booking_data = $ci->db->get_where('event_booking', array('event_id' => $event_id,'stand_id' => $stand_id),1)->result_array();
        
        return $booking_data;
    }

    public static function get_company_data($company_id)
    {
        $ci =& get_instance();
        $company_data = $ci->db->get_where('company', array('company_id' => $company_id),1)->result_array();
        
        return $company_data;
    }

    public static function get_stand_data($stand_id)
    {
        $ci =& get_instance();
        $stand_data = $ci->db->get_where('stand', array('stand_id' => $stand_id),1)->result_array();
        
        return $stand_data;
    }

    public static function get_company_doc_url($company_id)
    {
        $ci =& get_instance();
        $ci->db->select('doc_url');
        $doc_data = $ci->db->get_where('company', array('company_id' => $company_id),1)->result_array();
        
        return array_pop($doc_data);
    }

}