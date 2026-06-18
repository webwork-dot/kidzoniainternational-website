<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_sync_model extends CI_Model
{
    /**
     * Legacy sync from kcis_db -> kcis_leads is deprecated.
     * Website forms now write leads directly to kcis_leads.
     */
    public function get_unsynced_leads($limit = 200)
    {
        return array();
    }

    public function push_leads(array $rows)
    {
        return 0;
    }
}
