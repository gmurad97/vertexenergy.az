<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("home")
        ];
        $this->load->view("index", $context);
    }

    public function home()
    {
        $context = [
            "page_title" => $this->lang->line("home")
        ];
        $this->load->view("index", $context);
    }
}
