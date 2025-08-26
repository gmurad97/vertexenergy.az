<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageLoader
{
    protected $CI;
    private $session_key = 'language_session';
    private $default_language = 'en';

    public function initialize()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('language');
        $lang = $this->CI->session->userdata($this->session_key) ?? $this->default_language;
        $this->CI->session->set_userdata($this->session_key, $lang);
        $this->CI->lang->load('messages', $lang);
    }
}
