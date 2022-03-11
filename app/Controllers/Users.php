<?php 
namespace App\Controllers;
use App\Models\UsersModels;
use CodeIgniter\Controller;

class Users extends BaseController
{
    // show names list
    public function index(){
        $UsersModel = new UsersModels();
        $data['users'] = $UsersModel->getUser();
        return view('UsersViews/users', $data);
    }

    // add name form
    public function create(){
        return view('UsersViews/createuser');
    }
 
    // add data
    public function store() {
        $UsersModel = new UsersModels();
        $data = [
            'user_name' => $this->request->getVar('user_name'),
            'email'  => $this->request->getVar('email'),
            'desciption' => $this->request->getVar('desciption'),
            'dui' => $this->request->getVar('dui'),
            'phone' => $this->request->getVar('phone'),
        ];
        $UsersModel->insert($data);
        return $this->response->redirect(site_url('/viewUsers'));
    }
    public function userSingle($id = null){
        $model = model(UsersModels::class);
        $data ['obj']= $model->where('id', $id)->first();
        return view('UsersViews/edituser', $data);
    }

    // update name data
    public function update(){
        $UsersModel = new UsersModels();
        $id = $this->request->getVar('id');
        $data = [
            'user_name' => $this->request->getVar('user_name'),
            'email'  => $this->request->getVar('email'),
            'desciption' => $this->request->getVar('desciption'),
            'dui' => $this->request->getVar('dui'),
            'phone' => $this->request->getVar('phone'),
        ];
        $UsersModel->update($id, $data);
        return $this->response->redirect(site_url('/viewUsers'));
    }

    // delete name
    public function delete($id = null){
        $UsersModel = new UsersModels();
        $data['user'] = $UsersModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/viewUsers'));
    }
}
?>