<?php

namespace App\Controllers;

use App\Models\newmodel;

class Insert extends BaseController
{
    public function index()
    {
        echo 'doce';
        if($this->request->getMethod() == 'post'){
            $model = new newmodel();
                $row['name'] = $this->request->getPost('name');
                $row['work'] = $this->request->getPost('work');
                $row['status'] = $this->request->getPost('status');
                $row['birth'] = $this->request->getPost('birth');
                $row['city'] = $this->request->getPost('city');

                if($model->newrow('members', $row)){
                    echo 'success';
                }
            }else{
                
            }
       
    }
    public function insertad() {
        if($this->request->getMethod() == 'post'){
            
            $model = new newmodel();
                $roww['name'] = $this->request->getPost('name');
                $roww['work'] = $this->request->getPost('work');
                $roww['email'] = $this->request->getPost('email');
                $roww['city'] = $this->request->getPost('city');
                $roww['pass'] = $this->request->getPost('pass');
                // $roww['admin_pass'] = $this->request->getPost('admin_pass');
                // print_r($roww);
                $model->newrow('admin', $roww);
                // echo 'done';
                // return redirect()->to(base_url('daseboard'));
    }else{
                
    }
}

}