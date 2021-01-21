<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{

    public function __construct(User $model){

        $this->model = $model;

    }

    public function getAllDoctors(){
        return $this->model->where('type','doctor')->orderBy('name','asc')->get();
    }
    
}

