<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Konsumen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Konsumen_model');
    }

    public function index()
    {
        $this->template->load('template', 'konsumen/konsumen_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Konsumen_model->json();
    }

    public function read($id)
    {
        $row = $this->Konsumen_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'nama' => $row->nama,
                'alamat' => $row->alamat,
                'telp' => $row->telp,
            );
            $this->load->view('konsumen/konsumen_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsumen'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('konsumen/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
            'alamat' => set_value('alamat'),
            'telp' => set_value('telp'),
        );
        $this->load->view('konsumen/konsumen_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'telp' => $this->input->post('telp', TRUE),
            );

            $this->Konsumen_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('konsumen'));
        }
    }

    public function update($id)
    {
        $row = $this->Konsumen_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('konsumen/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'alamat' => set_value('alamat', $row->alamat),
                'telp' => set_value('telp', $row->telp),
            );
            $this->load->view('konsumen/konsumen_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsumen'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'telp' => $this->input->post('telp', TRUE),
            );

            $this->Konsumen_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('konsumen'));
        }
    }

    public function delete($id)
    {
        $row = $this->Konsumen_model->get_by_id($id);

        if ($row) {
            $this->Konsumen_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('konsumen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konsumen'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'telp', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}