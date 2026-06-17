<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    public function sent_simple_mail($message,$user_email,$email_subject,$file_url='') {
	    $this->load->library('email');
		//echo $user_email ;exit();
        // Use ZeptoMail (same as other working emails) instead of SendGrid
        $config = array(
          'protocol' => 'smtp',
          '_smtp_auth' => TRUE,
          'smtp_host' => 'smtp.zeptomail.com',
          'smtp_port' => 587,
          'smtp_user' => 'emailapikey',
          'smtp_pass' => 'wSsVR612+hOlDqx0nzT+crw4z1VXD1ygF0wp3lSg7yT/Gv+T/Mc8xBDPAQ+vSKcWF2dtFjIQobMhnBcHhDcIiot7zVAFDCiF9mqRe1U4J3x17qnvhDzDXG1dkhWJKogAwghqk2NjE8gl+g==',
          'charset' => 'utf-8',
          'mailtype' => 'html',
          'newline' => "\r\n",
          'wordwrap' => TRUE,
          'wrapchars' => 76,
          'validate' => FALSE,
          'priority' => 3,
          'smtp_crypto' => 'tls',
          'smtp_timeout' => 30
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        
        // Log the email address being used
        log_message('info', 'Email_model->sent_simple_mail() - Sending to: ' . $user_email);
        
        $this->email->to($user_email);
        $this->email->from('no-reply@kidzoniainternational.in', 'Kidzonia International');
        $this->email->subject($email_subject);
        $this->email->message($message);
		
        // Only attach file if file_url is provided and not empty
        if (!empty($file_url) && file_exists($file_url)) {
            $this->email->attach($file_url);
        }
        
        $result = $this->email->send();
        
        // Log if email fails
        if (!$result) {
            log_message('error', 'Email send failed. Error: ' . $this->email->print_debugger());
        }
        
        return $result;
    }
    
    public function build_branded_mail_message($message, $school_name, $team_name, $logo_url)
    {
        return '<body style="background-color:#f5f5f5;margin:0;padding:0;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#f5f5f5;">
                <tr><td style="padding:20px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border:1px solid #e0e0e0;">
                        <tr>
                            <td style="padding:20px;text-align:center;background-color:#122051;">
                                <img src="' . htmlspecialchars($logo_url) . '" alt="' . htmlspecialchars($school_name) . '" style="max-width:220px;height:auto;display:inline-block;" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:25px;font-family:Arial,Helvetica,sans-serif;font-size:15px;line-height:1.6;color:#333;">
                                <p style="margin:0 0 12px;font-size:16px;"><strong>' . htmlspecialchars($school_name) . '</strong></p>
                                <div>' . $message . '</div>
                                <p style="margin:20px 0 0;">Warm regards,<br><strong>' . htmlspecialchars($team_name) . '</strong></p>
                            </td>
                        </tr>
                    </table>
                </td></tr>
            </table>
        </body>';
    }
    
    public function sample_mail_message($message)
    {
        return $this->build_branded_mail_message(
            $message,
            'Kidzonia International',
            'Team KIPS',
            'https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png'
        );
    }
    
}
