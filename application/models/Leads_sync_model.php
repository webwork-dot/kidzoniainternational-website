<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_sync_model extends CI_Model
{
    private $db_src;   // local DB (kcis_db)
    private $db_dest;  // remote DB (kcis_leads)

    public function __construct()
    {
        parent::__construct();
        $this->db_src  = $this->load->database('kcis_db', TRUE);
        $this->db_dest = $this->load->database('kcis_leads', TRUE);
    }

    public function get_unsynced_leads($limit = 200)
    {
        $cols = [
            'id','is_sync','added_date','is_website','web_source','admission_type','user_id',
            'campaign_id','relation','first_name','last_name','mobile','email','how_know',
            'academic_year','program_id','child_first_name','child_last_name','gender','birthday',
            'age','date_of_lead','follow_up_date','remark','location','is_delete','is_enroll',
            'is_move','meeting_user_id','enquiry_id','school_type','school_id','meeting_type_id',
            'meeting_date','meeting_followup_date','meeting_remark','meeting_added_date',
            'utm_source','utm_medium','utm_id','utm_campaign','utm_term','utm_content','referrer_url','site_name'
        ];

        return $this->db_src
            ->select($cols)
            ->from('leads')
            ->where('is_sync', 0)
            ->order_by('id', 'DESC')
            ->limit($limit)
            ->get()
            ->result_array();
    }

    public function push_leads(array $rows)
    {
        $inserted = 0;
        foreach ($rows as $lead) {
            $data = $lead;

            unset($data['id']);
            unset($data['is_sync']);
            $this->db_dest->trans_start();
            $this->db_dest->insert('leads', $data);
            $this->db_dest->trans_complete();

            if ($this->db_dest->trans_status() === TRUE) {
                $this->db_src
                    ->where('id', $lead['id'])
                    ->update('leads', ['is_sync' => 1]);
                $inserted++;
            }
        }
        return $inserted;
    }
}
