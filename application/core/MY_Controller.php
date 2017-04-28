<?php
/*
@author Karsan
*/
class  MY_Controller  extends  CI_Controller  {

    function __construct()
    {
        parent::__construct(); 
        $this->load->library('unit_test');
    }

    public function send_mail($to = NULL,$subject = NULL,$body = NULL)
    {
        //Function to send mail that works based on custom email config
        $this->load->library('email');

        $to = (isset($to) && $to!='')?$to:'karsanrichard@gmail.com';
        $subject = (isset($subject) && $subject!='')?$subject:'WELCOME TO EXPO BOOKING';
        $body = (isset($body) && $body!='')?$body:'Email body from Expo Booking';

        $this->email->from('karsantests@gmail.com', 'Richard Karsan Expo Test Email');
        $this->email->to($to); 

        $this->email->subject($subject);
        $this->email->message($body);   

        $this->email->send();

        return $this->email->print_debugger();
    }

}
?>