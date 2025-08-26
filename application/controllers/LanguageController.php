<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LanguageController extends CI_Controller
{
    private $language_session_key = "language_session";
    private $default_language = "en";
    private $languages = [
        "en" => "English",
        "ru" => "Русский",
        "az" => "Azərbaycan",
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function index($language = "")
    {
        $available_languages = array_keys($this->languages);
        $selected_language = in_array(strtolower($language), $available_languages)
            ? strtolower($language)
            : $this->default_language;
        $this->session->set_userdata($this->language_session_key, $selected_language);
        redirect($_SERVER["HTTP_REFERER"] ?? base_url());
    }
}
