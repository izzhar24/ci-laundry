<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $this->data['title'] = "Setting Page";
        $this->_render_page('setting/setting_list', $this->data);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Setting_model->json();
    }

    public function read($id)
    {
        $row = $this->Setting_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'name' => $row->name,
                'image_icon' => $row->image_icon,
                'image_display' => $row->image_display,
                'is_active' => $row->is_active,
            );
            $this->load->view('setting/setting_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('setting'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('setting/create_action'),
            'id' => set_value('id'),
            'name' => set_value('name'),
            'image_icon' => set_value('image_icon'),
            'image_display' => set_value('image_display'),
            'is_active' => set_value('is_active'),
        );
        $this->_render_page('setting/setting_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'image_icon' => $this->input->post('image_icon', TRUE),
                'image_display' => $this->input->post('image_display', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
            );

            $this->Setting_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('setting'));
        }
    }

    public function update($id)
    {
        $row = $this->Setting_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('setting/update_action'),
                'id' => set_value('id', $row->id),
                'name' => set_value('name', $row->name),
                'image_icon' => set_value('image_icon', $row->image_icon),
                'image_display' => set_value('image_display', $row->image_display),
                'is_active' => set_value('is_active', $row->is_active),
            );
            $this->load->view('setting/setting_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('setting'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'image_icon' => $this->input->post('image_icon', TRUE),
                'image_display' => $this->input->post('image_display', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
            );

            $this->Setting_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('setting'));
        }
    }

    public function delete($id)
    {
        $row = $this->Setting_model->get_by_id($id);

        if ($row) {
            $this->Setting_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('setting'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('setting'));
        }
    }


    public function _render_page($view, $data = NULL, $returnhtml = FALSE) //I think this makes more sense
    {

        $viewdata = (empty($data)) ? $this->data : $data;

        $view_html = $this->template->load('template', $view, $viewdata, $returnhtml);

        // This will return html on 3rd argument being true
        if ($returnhtml) {
            return $view_html;
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('image_icon', 'image icon', 'trim|required');
        $this->form_validation->set_rules('image_display', 'image display', 'trim|required');
        $this->form_validation->set_rules('is_active', 'is active', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-07-15 18:15:41 */
/* http://harviacode.com */