<?php

namespace App\Controllers;

class mid extends BaseController
{
   
    public function midterm()
    {
        return view('midterm');
    }
     
    public function covit_show()
    {
        $data['name_title'] = $this->request->getPost('name_title');
        $data['Y1'] = $this->request->getPost('Y1');
       
        $data['Y2'] = $this->request->getPost('Y2');
        $data['Y3'] = $this->request->getPost('Y3');
        $data['Y4'] = $this->request->getPost('Y4');
      
       
        return view('covit_show',$data);
    }
    
}
