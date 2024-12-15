<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "email";
    protected $allowedFields = ['username','password','nama_lengkap','token'];

    /*
        untuk amnil data
    */

    public function getData($parameter){
        $builder = $this->table($this->table);
        $builder->where('username=', $parameter);
        $builder->orWhere('email=',$parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    //untuk update atau simpan data
    public function updateData($data){
        $builder = $this->table($this->table);
        if($builder->save($data)){
            return true;
        }else{
            return false;
        }
    }

}
