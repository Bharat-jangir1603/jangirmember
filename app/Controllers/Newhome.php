<?php

namespace App\Controllers;

use App\Models\newmodel;
use CodeIgniter\Model;

class Newhome extends BaseController
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function code4($work)
    {
        echo '<script>alert("code4")</script>';
        $this->session->set('val', $work);
        
        $this->codeaj();
       
    }

    public function index()
    {
        $name = $this->request->getPost('name');
        $pass = $this->request->getPost('pass');
        $this->session->set('pass', $pass);
        $obj = new newmodel();
        $where = array('name' => $name, 'pass' => $pass);

        if (empty($obj->check('admin', $where))) {
            echo 'ERROR: incrected details.';
        } else {
            $data['user'] = $obj->check('admin', $where);
            if ($data['user']->name == $name && $data['user']->pass == $pass) {
                echo 'submitted';
            }
        }
    }
    public function dase()
    {
        if (!empty($this->session->get('pass'))) {
            $obj = new newmodel();
            $data['result'] = $obj->selectrow('members');
            $data['admin'] = $obj->selectrow('admin');
            $data['spn'] = $this->session->get('val');

            $this->session->set('data_', $data);
            echo view('my_view/header', $data);
            echo view('my_view/home');
            $this->codeaj();
            echo view('my_view/footer');
        } else {
            return redirect()->to(base_url());
        }
    }
    public function codeaj()
    {
        
        $val = $this->session->get('val');
        $dataa = $this->session->get('data_');
        if ($val == 'dash') {
            echo view('my_view/use_in_home', $dataa);
        } elseif ($val == 'form_id') {
            echo view('my_view/forms');
        } elseif ($val == 'forms_tbl') {
            echo view('my_view/Admin_tbl', $dataa);
        } elseif ($val == 'forms_pg') {
            echo '<script>alert("forms_pg Clicked")</script>';
        }else {
            echo view('my_view/use_in_home', $dataa);
        }
    }
    public function search($term)
    {
        $obj = new newmodel();
        $where = 'name LIKE "%' . $term . '%" OR work LIKE "%' . $term . '%" OR status LIKE "%' . $term . '%" OR birth LIKE "%' . $term . '%" OR city LIKE "%' . $term . '%"';
        if ($where != '') {
            $data['result'] = $obj->selectrow('members', $where);
            echo view('my_view/use_in_home', $data);
        } else {
            $this->codeaj();
        }
    }
    public function update($id = NULL)
    {
        // echo 'This is update';
        $obj = new newmodel();
        $where = array('row' => $id);
        $this->session->set('id', $where);
        $data['value'] = $obj->selectonerow('members', $where);
        // echo view('my_view/header');
        echo view('my_view/edit_form', $data);
    }
    public function upd()
    {
        echo 'This is update';
        $obj = new newmodel();
        $id = $this->session->get('id');
        $row['name'] = $this->request->getPost('name');
        $row['work'] = $this->request->getPost('work');
        $row['status'] = $this->request->getPost('status');
        $row['birth'] = $this->request->getPost('birth');
        $row['city'] = $this->request->getPost('city');
        // $where = array('row' => $row['name']);
        $obj->updat('members', $id, $row);
        // return redirect()->to(base_url('daseboard'));
    }
    public function delete($id = NULL)
    {
        if ($id != NULL) {
            $obj = new newmodel();
            $where = array('row' => $id);
            $obj->deleterow('members', $where);
            $this->codeaj();
            // return redirect()->to(previous_url());
        }
    }
    public function logout()
    {
        // $this->session->unset();
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
