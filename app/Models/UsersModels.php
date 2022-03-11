<?php
namespace App\Models;
use App\Entities\Users;
use CodeIgniter\Model;


class UsersModels extends Model{
    protected $returnType = Users::class;

    protected $table = 'Users';

    protected $primarykey = 'id';

    protected $allowedFields = ['user_name', 'email', 'desciption', 'dui', 'phone'];

    public function getUser(){
        return $this->findAll();
    }
}

?>