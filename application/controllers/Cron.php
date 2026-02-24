<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_sync_model');
    }


    public function push_leads()
    {
        // if (!$this->input->is_cli_request()) {
        //     show_error('Access denied', 403);
        //     return;
        // }
        $leads = $this->Leads_sync_model->get_unsynced_leads();

        if (empty($leads)) {
            echo date('Y-m-d H:i:s') . " - No unsynced leads found.\n";
            return;
        }

        $inserted = $this->Leads_sync_model->push_leads($leads);
        echo date('Y-m-d H:i:s') . " - Synced {$inserted} lead(s).\n";
    }
}
