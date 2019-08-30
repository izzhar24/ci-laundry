<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Supplier_model extends CI_Model
{

    public $table = 'suppliers';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('suppliers.id,name,address,telp_number,description,is_active,badges.icon');
        $this->datatables->from('suppliers');
        //add this line for join
        $this->datatables->join('badges', 'suppliers.is_active = badges.id_status');
        $this->datatables->add_column('action', anchor(site_url('supplier/update/$1'), "<i class='fa fa-edit'></i>") . anchor(site_url('supplier/delete/$1'), " <i class='fa fa-trash'></i>", 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
        // var_dump($this->datatables);

    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('address', $q);
        $this->db->or_like('telp_number', $q);
        $this->db->or_like('description', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('name', $q);
        $this->db->or_like('address', $q);
        $this->db->or_like('telp_number', $q);
        $this->db->or_like('description', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}