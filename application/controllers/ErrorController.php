<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Lang $lang
 * @property CI_Session $session
 * @property CI_Output $output
 */
class ErrorController extends CI_Controller
{
    public function index()
    {
        $this->output->set_status_header(404);
        $this->lang->load("messages", $this->session->userdata("language_session") ?? "en");
        $context = [
            "page_title" => $this->lang->line("page_not_found")
        ];
        $this->load->view("error_404", $context);
    }
}
