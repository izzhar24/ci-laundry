<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Item extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            show_error('You must be an administrator to view this page.');
        } else {
            $this->data['title'] = $this->lang->line('index_heading');

            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $this->data['users'] = $this->ion_auth->users()->result();
            foreach ($this->data['users'] as $k => $user) {
                $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }

            $this->_render_page('item/item_list', $this->data);
        }
        // $this->load->view('item/item_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Item_model->json();
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('item/create_action'),
            'id' => set_value('id'),
            'name' => set_value('name'),
            'unit' => set_value('unit')
        );
        $data['suppliers'] = $this->Item_model->get_all_supplier();
        $this->_render_page('item/item_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'unit' => $this->input->post('unit', TRUE),
            );

            $this->Item_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('item'));
        }
    }

    public function update($id)
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('item/update_action'),
                'id' => set_value('id', $row->id),
                'name' => set_value('name', $row->name),
                'unit' => set_value('unit', $row->unit)
            );
            $data['suppliers'] = $this->Item_model->get_all_supplier();
            $this->_render_page('item/item_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
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
                'unit' => $this->input->post('unit', TRUE),
                'id_supplier' => $this->input->post('id_supplier', TRUE),
                'price' => $this->input->post('price', TRUE),
            );

            $this->Item_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('item'));
            // var_dump($data);
        }
    }

    public function delete($id)
    {
        $row = $this->Item_model->get_by_id($id);

        if ($row) {
            $this->Item_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('item'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('item'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('unit', 'unit', 'trim|required');
        $this->form_validation->set_rules('id_supplier', 'id_supplier', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
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
}
