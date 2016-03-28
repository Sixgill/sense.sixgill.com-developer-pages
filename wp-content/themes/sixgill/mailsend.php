<?php
ob_start();
    /**
    * Template Name: mailsend
    *
    * Description: mailsend form for sixgill.
    *
    * @package WordPress
    */
	
	if(isset($_POST['submitted'])){
              
        $date1=date("F d,Y h:i:s a");
        /*$emailTo = get_option('admin_email');*/
        $emailTo = 'sales@sixgill.com';        
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $company = sanitize_text_field($_POST['company']);
        $c_email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $full_name = $first_name.' '.$last_name;
		
            $messageBody = "
            <table width='450' border='1px' bordercolor='#B6B6B6' align='center'  cellspacing='0' cellpadding='10' style='border:1px solid #B6B6B6; border-collapse:collapse; background-color:#FFF; margin-top:15px; margin-bottom:10px;'>
            <tr><td colspan='2' style='text-align:center; background-color:#619FCE; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#fff; font-weight:bold; padding:7px;'>Request a Demo Form :&nbsp;&nbsp;&nbsp;[&nbsp;{$date1}&nbsp;]</td>
            </tr>
            <tr>
            <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:7px;'>First Name :</td>
            <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$first_name}</td>
            </tr>
			<tr>
            <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Last Name :</td>
            <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$last_name}</td>
            </tr>
			<tr>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Company Name:</td>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$company}</td>
            </tr>
            <tr>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Email :</td>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$c_email}</td>
            </tr>
            <tr>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Phone Number :</td>
            <td align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$phone}</td>
            </tr>             
            </table>";

            $subject="Contact Us Form {$full_name}";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $headers .= "From: {$full_name} <{$c_email}>" . "\r\n";
            $headers .= "Reply-To: {$full_name} <{$c_email}>" . "\r\n";
            @mail($emailTo, $subject, $messageBody, $headers);
            $success = true;

            //$message = '<div id="message" class="success"><p>'. __("Message has been sent, we will contact you soon!").'</p></div>';
            if($success==true)
            {
               $location = '/thank-you/';
				wp_redirect($location);
            }
        }

?>
