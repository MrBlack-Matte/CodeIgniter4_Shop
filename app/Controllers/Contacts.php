<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NewsModel;
class Contacts extends BaseController
{



    ////////////////////////////////
    //           VIEW            //
    ////////////////////////////////
    public function index()
	{ 
        $model = new NewsModel();

      $data['users'] = $model->findAll();

        echo view('templates/header');
        echo view('/pages/contact', $data);
        echo view('templates/footer');
    }
    public function create()
    {   echo view('templates/header');
        echo view('pages/create-contact');
        echo view('templates/footer');
    }
        ////////////////////////////////
    //          STORE            //
  ////////////////////////////////
    public function store()
    {  

        helper(['form', 'url']);

        $data = [

            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone_num' => $this->request->getVar('phone_num'),
            'message'  => $this->request->getVar('message')
            ];
            $db      = \Config\Database::connect();
            $builder = $db->table('contact_tbl');

            $builder->insert($data);


      return redirect()->to( base_url('/contact') );
    // //--------------------------------------------------------------------
    }
     ////////////////////////////////
    //          EDIT             //
    //////////////////////////////
    public function edit($id = null)
    {
      
     $model = new NewsModel();
 
     $data['user'] = $model->where('id',$id)->first();
     echo view('templates/header');
     echo view('pages/edit-contact', $data);   
     echo view('templates/footer');

    }

    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new NewsModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone_num' => $this->request->getVar('phone_num'),
            'message'  => $this->request->getVar('message'),
            ];
    
    
            $db      = \Config\Database::connect();
            $builder = $db->table('contact_tbl');
      $builder->where('id', $id);
      $builder->update($data);
      // $save = $model->update($id,$data);
      
  
    return  redirect()->to( base_url('/contacts') );
    
        
    }

      ///////////////////////////////
     //          DELETE           //
    ///////////////////////////////
    public function delete($id = null)
    {
 
     $model = new NewsModel();
 
     $data['users'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('/contacts') );
    
    }
}