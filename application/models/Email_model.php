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
        $this->email->from('noreply@kidzonia.co.in', 'Kidzonia');
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
    
    public function sample_mail_message($message)
    {
        $mail_message_='<body style="background-color: #fbf8ee; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fbf8ee;" width="100%">
            <tbody>
                <tr>
                <td>
        
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
                <tbody>
                <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
                <tbody>
                <tr>
                <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="50%">
                <table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                <tr>
                <td style="width:100%;padding-right:0px;padding-left:0px;padding-top:5px;">
                <div align="center" style="line-height:10px"><img src="https://erp.kidzonia.co.in/panel/uploads/system/email-header.png" style="display: block; height: auto; border: 0;width: 100%;background-size: cover;" /></div>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
        
        
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
                <tbody>
                <tr>
                <td>
        
        
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
                <tbody>
                <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;border: 1px solid #ddd;" width="600">
                <tbody>
                <tr>
                <td class="column column-1" style="border: 1px solid #ddd;mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 25px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                <table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                <tr>
                <td style="padding-bottom:10px;padding-left:25px;padding-right:25px;padding-top:20px;">
                <div style="font-family: sans-serif">
                <div style="font-size: 12px; mso-line-height-alt: 18px; color: #636363; line-height: 1.5; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 24px;"><span style="font-size:16px;"><strong>Kidzonia International,</strong></span></p>
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 18px;"> </p>
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 24px;"><span style="font-size:16px;">'.$message.'</span></p>
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 18px;"> </p>
        
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 24px;"><span style="font-size:16px;"><strong>Thanks and Regards,</strong></span></p>
                <p style="margin: 0; font-size: 16px; mso-line-height-alt: 24px;"><span style="font-size:16px;"><strong>Team KCIS</strong></span></p>
                </div>
                </div>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
        
        
                </td>
                </tr>
                </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6"
                                role="presentation"
                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                class="row-content stack" role="presentation"
                                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;color: #000000; width: 600px;"
                                                width="600">
                                                <tbody>
                                                    <tr>
                                                        <td  width="100%">
                                                           <div style="background:#fbbb12;height:124px;margin:0 auto;width:100%;background-size: 100%;display: flex;align-items: center;justify-content: space-around;text-align: center;">
        						<div class="" style="width:35%;margin: auto 0;">
        							<p style="font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">Follow Us @</p>
        							<p style="font-weight:bold;font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">Kidzonia international</p>
        							<div >
        							<a href="https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/facebook.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://instagram.com/kidzonia_hyderabad?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/instagram.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL?si=v37dXLROEXXubzJ_" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/youtube.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://www.linkedin.com/in/kidzonia-hyderabad-87451428a/" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/linkedin.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://twitter.com/Kidzoniapre_Hyd" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/twitter.png" class="CToWUd" style="width: 25px;"></a>
        							</div>
        						</div>
        						<div class="" style="width:30%;margin: auto 0;">
        							<img src="https://erp.kidzonia.co.in/panel/uploads/system/footer-logo.png" class="CToWUd">
        							<p style="font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">Launching @2025</p>
        							<p style="font-weight:bold;font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">K 12 School - Kollur</p>
        						</div>
        						<div class="" style="width:35%;margin: auto 0;">
        							<p style="font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">Follow Us @</p>
        							<p style="font-weight:bold;font-size:14px;line-height:1;text-align:center;margin: 5px;padding: 0;">Kidzonia credence international</p>
        							<div >
        							<a href="https://www.facebook.com/KidzoniaCredence" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/facebook.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://instagram.com/kidzoniacredence_hyderabad?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/instagram.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://youtube.com/@kidzoniacredence?si=MMO_nd0nCT_Ayi0N" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/youtube.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://www.linkedin.com/in/kidzoniacredence-hyderabad-704b99289/" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/linkedin.png" class="CToWUd" style="width: 25px;"></a>
        							<a href="https://twitter.com/KCredenceIS?t=RwZExuaPLhFp6fyb0HrZjg&s=09" target="_blank"><img src="https://erp.kidzonia.co.in/panel/uploads/system/twitter.png" class="CToWUd" style="width: 25px;"></a>
        							</div>
        						</div>
        					</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>';

        return $mail_message_;
    }
    
}
