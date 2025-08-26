<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShippingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $context = [
            "page_title" => $this->lang->line("shipping")
        ];
        $this->load->view("shipping", $context);
    }
}
